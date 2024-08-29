<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use CrudTrait;
    use HasFactory;

    // Define o nome da tabela associada ao modelo
    protected $table = 'nota';

    // Define a chave primária
    protected $primaryKey = 'idNota';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'dataNota',
        'totalNota',
        'categoriaNota',
        'idUser',
    ];

    // Define os atributos que devem ser ocultados para arrays
    protected $hidden = [
        // Adicione atributos aqui se necessário
    ];

    // Define os atributos que devem ser casted para tipos específicos
    protected $casts = [
        'dataNota' => 'datetime', // Cast 'dataNota' para um objeto Carbon datetime
        'totalNota' => 'decimal:2', // Cast 'totalNota' para decimal com 2 casas decimais
    ];

    // Define a relação com o modelo User
    public function relUser()
    {
        return $this->hasOne(User::class, 'id', 'idUser');
    }
}
