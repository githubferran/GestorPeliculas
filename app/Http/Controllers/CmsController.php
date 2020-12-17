<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Pelicula;
use App\Categoria;
use DB;

class CmsController extends Controller
{
    public function index()
    {
    	return view('/cms/cms');
    }

    public function gestorCategorias(){

        //$pelicula = Pelicula::find(1);
        $categorias = Categoria::where('id', '>', 0)->get();
        $categorias = $categorias->sortBy('nombre');
        //dd($categoria->peliculas[0]->descripcion);
        //dd($pelicula->categorias->nombre);

        return view('/cms/categorias', ['categorias'=>$categorias]);

    }

    public function gestorDirectors(){

        return view('/cms/directors');

    }

    public function gestorPeliculas(){  // <----

        //$peliculas = DB::table('peliculas')->get();
        //$peliculas = $peliculas->sortBy('titulo');
        $peliculas = Pelicula::get();
        $peliculas = $peliculas->sortBy('categoria_id');
        $pelicula = array();

        //dd($peliculas[0]->categorias->nombre);

        return view("/cms/peliculas", ['peliculas'=>$peliculas]);

    }

}
