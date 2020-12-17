<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded = ['nombre', 'descripcion'];

    public function peliculas()
    {
    	return $this->hasMany(Pelicula::class, 'categoria_id');
    }
}
