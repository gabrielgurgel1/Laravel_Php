<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class musica extends Model
{
    protected $table = 'musicas';

    protected $fillabe = [
        'nome_musica', 'nome_artista', 'rank'
    ];
    protected $guarded=[]; 
}
