<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'evento';
    

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idEvento';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    // Define quais campos podem ser preenchidos via mass assignment
    protected $fillable = [
        'dataEvento',
        'descricaoEvento',
    ];
}
