<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    use CrudTrait;
    use HasFactory;

    // Define o nome da tabela associada ao modelo
    protected $table = 'alternativa';

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idAlternativa';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'textoAlternativa',
        'corretaAlternativa',
        'imagemAlternativa',
        'idQuestao',
    ];

    // Define as relações com outros modelos
    public function relQuestao()
    {
        return $this->hasOne(Questao::class, 'idQuestao', 'idQuestao');
    }
}
