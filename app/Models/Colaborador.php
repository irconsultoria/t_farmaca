<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaborador
 *
 * @package farmaca_teste
 *
 * @author  Pedro Soares <pedrohosoares@gmail.com>
 * @OA\Schema(
 *     title="Colaborador model",
 *     description="Colaborador model",
 * )
 */

class Colaborador extends Model
{
    use HasFactory;
    public $table = 'colaborador';
    public $fillable = [
        'id',
        'email',
        'nome',
        'cpf',
        'rg',
        'cep',
        'endereco',
        'numero',
        'cidade',
        'estado'
    ];

    public function historico_salarios(){

        return $this->hasMany(HistoricoSalario::class,'colaborador_id','id')->orderBy('created_at','DESC')->orderBy('id','DESC');

    }
}
