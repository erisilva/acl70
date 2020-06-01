<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpage extends Model
{
    protected $fillable = [
        'valor', 'nome',
    ];
}
