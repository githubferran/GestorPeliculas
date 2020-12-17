@extends('layouts.nav')
@section('content')    
<main class="form-signin">
<div class="title-section">
    <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-3 fw-normal">Porfabor introduce los datos de la pelicula a registrar</h1>
            <h4 class="h4 mb-3 fw-normal">Categoria y Director</h4>
        </div>
        <div class="col-2">
            <a href="{{ url('peliculas')}}" class="content-white btn btn-lg" type="submit"><- Volver</a >
        </div>
    </div>
</div>
<div class="form-content-tipe">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/guardar-pelicula" enctype="multipart/form-data">
     @csrf
     <div class="items-conten-form"> 
        <select name="categoria" class="form-control">
            <option disabled selected>Selecciona una categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select>
        <input type="text" id="inputDirectores" name="director" class="form-control" placeholder="Directores" autofocus>
    </div>
    <div class="movie-section-title">
        <h4 class="h4 mb-3 fw-normal">Ficha de la pelicula</h4>
    </div>
    <div class="items-conten-form"> 
        <input type="text" id="inputTitulo" name="titulo" class="item-control form-control" placeholder="Titulo">
        <input type="file" id="inputPortada" name="portada" class="item-control form-control" placeholder="Portada">
        <textarea type="text" id="inputDescripcio" name="descripcion" class="item-control form-control" placeholder="Descripcio" placeholder="Descripción"></textarea>
        <input type="number" id="inputValoracion" name="valoracion" class="item-control form-control" placeholder="Valoracion">
        <input type="date" id="inputAño" name="año" class="item-control form-control" placeholder="Año">
        <input type="text" id="inputTrailer"  name="trailer" class="item-control form-control" placeholder="Trailer">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Guardar</button>
    </div>
    </form>
</div>
</main>
@endsection
