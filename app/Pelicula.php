<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pelicula extends Model
{
	protected $fillable = ['categoria_id', 'director', 'titulo', 'portada', 'descripcion', 'valoracion', 'año', 'trailer'];

    public function categorias()
    {
    	return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
