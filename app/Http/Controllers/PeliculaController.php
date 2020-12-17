<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Pelicula;
use App\Categoria;
use DB;
use App\Http\Requests\ValidationRequest;

class PeliculaController extends Controller
{
    public function afegir(){
        
        $categorias = DB::table('categorias')->get();
        $categorias = $categorias->sortBy('nombre');
        $peliculas = DB::table('peliculas')->get();
        return view("/cms/afegir-pelicula", ['peliculas'=>$peliculas, 'categorias'=>$categorias]);

    }

	public function editar(Request $request){

        

        $pelicula = DB::table('peliculas')->where('id', $request->id)->first();
        $categoria = DB::table('categorias')->where('id', $pelicula->categoria_id)->first();
        $categorias = DB::table('categorias')->get();
        $nombre = $categoria->nombre;
        $id = $categoria->id;

        return view("/cms/editar-pelicula", ['pelicula' => $pelicula, 'categorias' => $categorias, 'nombre_categoria'=>$nombre, 'id_categoria' => $id]);

    }

    public function update(Request $request){

        $this->validacio($request);

	    //dd($request->input("id"));
	    $img = $this->saveImg($request);

	    Pelicula::where('id', $request->input("id"))->update(['categoria_id' =>  $request->get("categoria_id"), 'director' => $request->input("director"), 'titulo' => $request->input("titulo"), 'portada' => $img, 'descripcion' => $request->input("descripcion"), 'valoracion' => $request->input("valoracion"), 'año' => $request->input("año")]);

	    return redirect()->action('CmsController@gestorPeliculas');
	}

	public function guardar(Request $request){

        $this->validacio($request);
        
        $pelicula = new Pelicula;
        
        $img = $this->saveImg($request);
        
        //Guardem les dades recollides del request
    
        $pelicula->categoria_id = $request->get('categoria'); 
        $pelicula->director = $request->input("director");
        $pelicula->titulo = $request->input("titulo");
        $pelicula->portada = $img;
        $pelicula->descripcion = $request->input("descripcion");
        $pelicula->valoracion = $request->input("valoracion");
        $pelicula->año = $request->input("año");
        $pelicula->trailer = $request->input("trailer");
        $pelicula->save();

        return redirect()->action('PeliculaController@afegir');

    }

	public function eliminar(Request $request){

        //compovamos si la pelicula ya esta registrada
        $toDelet = DB::table('peliculas')->where('id', $request->id)->delete();

        return redirect()->action('CmsController@gestorPeliculas');

    }

    public function allMovies(){

        $peliculas = DB::table('peliculas')->get();

        return $peliculas;

    }

    public function saveImg($img){

    	//Recollim l'arxiu de l'imatge 
        $file = $img->file("portada");

        //Obtenim el nom de l'arxiu
        $name = $file->getClientOriginalName();

        //Redimensionem la imatge per a l'hora de mostrarla tigui les dimension que volem
        $image_resize = Image::make($file->getRealPath());    

        $image_resize->resize(372, 500);

        //Guardem la imatge a la ruta app/public al directori storage
        $image_resize->save(public_path('storage/'.$name));

        return $name;

    }

    public function confirmar(Request $request)
    {
        //dd($request->id);
        $peliculas = DB::table('peliculas')->get();
        $pelicula = Pelicula::findOrFail($request->id);
        //dd($pelicula);
        return view('/cms/peliculas',['peliculas'=>$peliculas,'confirm'=>$pelicula]);

    }

    public function validacio($request){

        $validated = $request->validate([
            'categoria' => 'required',
            'director' => 'required',
            'titulo' => 'required',
            'portada' => 'required',
            'descripcion' => 'required',
            'valoracion' => 'required',
            'año' => 'required',
            'trailer' => 'required',
        ]);

    }
}
