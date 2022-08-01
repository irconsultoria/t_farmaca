<?php

namespace App\Repositories;
use App\Models\Colaborador;

class ColaboradorRepository
{
    private $model;

    public function __construct(Colaborador $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        return $this->model->with('historico_salarios')->get();
    }
//$criterios = [coluna,operacao,valor]
    public function findByOr($criterios)
    {
        if (count($criterios) > 0) {
            foreach ($criterios as $c) {
                $this->model = $this->model->orWhere($c[0], $c[1], $c[2]);
            }
        }
        return $this->model->with('historico_salarios')->get();
    }
    public function findById($id)
    {

        return $this->model->with('historico_salarios')->where('id', '=', $id)->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }


}
