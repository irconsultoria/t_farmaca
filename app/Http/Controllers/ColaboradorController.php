<?php

namespace App\Http\Controllers;

use App\Http\Resources\ColaboradorResource;

use App\Repositories\ColaboradorRepository;
use Illuminate\Http\Request;
use Redirect;

class ColaboradorController extends Controller
{
    public function index(ColaboradorRepository $repository)
    {
        $colaboradores = collect($repository->findAll());
        return view('index')->with(compact('colaboradores'));
    }

    public function create()
    {
        return view('create');
    }

    public function show($id, ColaboradorRepository $repository)
    {

        $colaborador = $repository->findById($id);
        return view('show')->with(compact('colaborador'));


    }


    public function showCpfId($cpfId = null, ColaboradorRepository $repository)
    {
        if ($cpfId !== '') {
            $where = [
                0 => ["cpf", '=', str_replace(['.', '-'], '', $cpfId)],
                1 => ["id", '=', $cpfId]
            ];
        }

        return collect($repository->findByOr($where));

    }

    public function store(Request $request, ColaboradorRepository $repository)
    {

        $validated = $request->validate([
            'nome'       => 'required',
            'email'      => 'required|email|unique:colaborador',
            'cpf'=>'required|digits:11|unique:colaborador',
            'rg'=>'required|digits_between:13,14',
            'cep'=>'required|digits:8',
            'endereco'=>'required',
            'numero'=>'required|integer',
            'cidade'=>'required',
            'estado'=>'required'
        ]);

        $newColaborator = $repository->create($request->all());
        if ($newColaborator) {
            return Redirect::to('colaboradores');
        }


    }

    public function destroy($id, ColaboradorRepository $repository)
    {
        $repository->delete($id);
        return Redirect::to('colaboradores');
    }

//todo implementar update

//    public function update(Request $request)
//    {
//
//        $newColaborator = Colaborator::find($request->id);
//        $newColaborator->cpf = $request->cpf;
//        $newColaborator->email = $request->email;
//        $newColaborator->rg = $request->rg;
//        $newColaborator->cep = $request->cep;
//        $newColaborator->endereco = $request->endereco;
//        $newColaborator->numero = $request->numero;
//        $newColaborator->cidade = $request->cidade;
//        $newColaborator->estado = $request->estado;
//        $newColaborator->save();
//        if ($newColaborator) {
//            return $newColaborator;
//        }
//
//    }
}
