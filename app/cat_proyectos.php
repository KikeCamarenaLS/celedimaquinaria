<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_proyectos extends Model
{
    protected $table = 'cat_proyecto';
    protected $fillable=['id_proyecto','proyecto'];
}
