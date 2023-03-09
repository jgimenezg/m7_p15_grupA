<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'nom', 'tipus', 'descripcio', 'nivell'
    ];
}
