<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Repositories\HistoricoSalarioRepository;

class ColaboradorResource extends JsonResource
{
    public HistoricoSalarioRepository $repositorySalario;

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'salarios' => $this->historico_salarios()
        ];
    }

}
