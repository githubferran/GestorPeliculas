<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Pelicula;
use DB;

class CategoriaController extends Controller
{
    public function afegir(){

        return view("/cms/afegir-categoria");

    }

	public function editar(Request $request){

	    $categoria= Categoria::find($request->id);

	    return view("/cms/editar-categoria", ['categoria'=>$categoria]);

	}

	public function guardar(Request $request){

		$this->validacio($request);

	    $categoria = new Categoria; 
	    //Guardem les dades recollides del request
	    $categoria->nombre = $request->input("nombre");
	    $categoria->descripcion = $request->input("descripcion");
	    $categoria->save();

	    return redirect()->action('CategoriaController@afegir');


	}

	public function update(Request $request){

	    $this->validacio($request);

	    Categoria::where('id', $request->input("id"))->update(['nombre' =>  $request->input("nombre"), 'descripcion' => $request->input("descripcion")]);

	    return redirect()->action('CmsController@gestorCategorias');
	}

	public function eliminar(Request $request){
		$id = $request->id;
		Pelicula::where('categoria_id', $id)->update(['categoria_id'=> 0]);
	    Categoria::where('id', $request->id)->delete();

	    return redirect()->action('CmsController@gestorCategorias');

	}

	public function validacio($request){

		$validated = $request->validate([
	        'nombre' => 'required',
	        'descripcion' => 'required',
	    ]);

	}


}
