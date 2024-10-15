<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    // Define quais campos podem ser preenchidos via mass assignment
    protected $fillable = [
        'data',
        'descricao',
    ];
}
