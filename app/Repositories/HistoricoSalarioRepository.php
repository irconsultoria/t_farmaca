<?php

namespace App\Repositories;

use App\Models\HistoricoSalario;

class HistoricoSalarioRepository
{
    private $model;

    public function __construct(HistoricoSalario $model)
    {
        $this->model = $model;
    }


    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
