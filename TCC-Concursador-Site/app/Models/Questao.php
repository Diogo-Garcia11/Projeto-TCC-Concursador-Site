<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    use CrudTrait;
    use HasFactory;
    // Define o nome da tabela associada ao modelo
    protected $table = 'questao';

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idQuestao';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'contextoQuestao',
        'materiaQuestao',
        'categoriaQuestao',
        'introducaoAlternativaQuestao',
        'imagemQuestao',
    ];

    // Define os atributos que devem ser ocultados para arrays
    protected $hidden = [
        // Adicione atributos aqui se necessário
    ];

    // Define os atributos que devem ser casted para tipos específicos
    protected $casts = [
        // Adicione os casts aqui se necessário
    ];
    

    public function relAlternativa()
    {
        return $this->hasMany(Alternativa::class, 'idQuestao');
    }

}
