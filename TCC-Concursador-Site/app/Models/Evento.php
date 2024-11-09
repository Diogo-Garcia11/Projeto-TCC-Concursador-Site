<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'evento'; // Especifica que o nome da tabela é 'evento'

    protected $fillable = ['dataEvento', 'descricaoEvento']; // Colunas exatamente como definidas na migração
}
