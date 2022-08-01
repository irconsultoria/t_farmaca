<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoSalario extends Model
{
    use HasFactory;
    public $table = 'historico_salario';
    public $fillable = [
        'id',
        'valor',
        'colaborador_id'
    ];

}
