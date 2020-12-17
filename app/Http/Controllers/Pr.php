<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Pelicula;
use App\Categoria;
use DB;

class PeliculasController extends Controller
{
    public function afegir(){
        
        $categorias = $this->allCategorias();
        $categorias = $categorias->sortBy('nombre');
        $peliculas = $this->allMovies();
        return view("/cms/afegir-pelicula", ['peliculas'=>$peliculas, 'categorias'=>$categorias]);

    }

	public function editar(Request $request){

        $pelicula = DB::table('peliculas')->where('id', $request->id)->first();
        $categoria = DB::table('categorias')->where('id', $pelicula->categoria_id)->first();

        return view("/cms/editar-pelicula", ['pelicula' => $pelicula, 'categoria'=>$categoria->nombre]);

    }

	public function guardar(Request $request){

        //compovamos si la pelicula ya esta registrada
        $pelicula = DB::table('peliculas')->where('titulo', $request->input("titulo"))->first();
        
        if($pelicula== null){
          $pelicula = new Pelicula;
        }
    
        //Recollim l'arxiu de l'imatge 
        $file = $request->file("portada");

        //Obtenim el nom de l'arxiu
        $name = $file->getClientOriginalName();

        //Redimensionem la imatge per a l'hora de mostrarla tigui les dimension que volem
        $image_resize = Image::make($file->getRealPath());              
        $image_resize->resize(372, 500);

        //Guardem la imatge a la ruta app/public al directori storage
        $image_resize->save(storage_path('app/public/'.$name));

        //Guardem les dades recollides del request
    
        $pelicula->categoria_id = $request->get('categoria'); 
        $pelicula->director = $request->input("director");
        $pelicula->titulo = $request->input("titulo");
        $pelicula->portada = $name;
        $pelicula->descripcion = $request->input("descripcion");
        $pelicula->valoracion = $request->input("valoracion");
        $pelicula->año = $request->input("año");
        $pelicula->trailer = $request->input("trailer");
        $pelicula->save();

        return redirect()->action('CmsController@afegirPelicula');

    }

	public function eliminar(Request $request){

        //compovamos si la pelicula ya esta registrada
        $toDelet = DB::table('peliculas')->where('id', $request->id)->delete();

        return redirect()->action('CmsController@gestorPeliculas');

    }
}
