<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
use DB;

class DirectorController extends Controller
{

    public function (){

        return view("/cms/editar-peliculas");

    }

    public function editar(Request $request){


        return view("/cms/editar-director");

    }

    public function guardar(Request $request){

        return view("/cms/afegir-director");

    }

    public function eliminar(Request $request){


	    return redirect()->action('CmsController@gestorDirectors');

	}
}
