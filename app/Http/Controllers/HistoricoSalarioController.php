<?php

namespace App\Http\Controllers;

use App\Repositories\HistoricoSalarioRepository;
use Illuminate\Http\Request;
use Redirect;

class HistoricoSalarioController extends Controller
{

    public function atualizaSalario(Request $request, HistoricoSalarioRepository $repository)
    {

        $validated = $request->validate([
            'colaborador_id'       => 'required',
            'valor'       => 'required',
        ]);

        $newWave = $repository->create($request->all());
        return $newWave;

    }

}
