<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $table = 'anuncio';

    protected $fillable = [
        'titulo',
        'categoria',
        'categoria_id',
        'descricao',
        'localizacao',
        'valor',
        'email',
        'nomeanunc',
        'data_criacao',
        'foto',
    ];
}
