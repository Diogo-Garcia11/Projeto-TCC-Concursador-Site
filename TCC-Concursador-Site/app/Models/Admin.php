<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Define o nome da tabela associada ao modelo
    protected $table = 'admin';

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idAdmin';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'nomeAdmin',
        'emailAdmin',
        'senhaAdmin',
    ];

    // Define os atributos que devem ser ocultados para arrays
    protected $hidden = [
        'senhaAdmin', // Oculta a senha para não ser exibida nos arrays
    ];

    // Define os atributos que devem ser casted para tipos específicos
    protected $casts = [
        // Adicione casts aqui se necessário
    ];

}
