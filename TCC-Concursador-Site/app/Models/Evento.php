<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use CrudTrait;
    use HasFactory;
    // Define o nome da tabela associada ao modelo
    protected $table = 'evento';

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idEvento';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';


    protected $fillable = ['dataEvento', 'descricaoEvento']; // Colunas exatamente como definidas na migração
}
