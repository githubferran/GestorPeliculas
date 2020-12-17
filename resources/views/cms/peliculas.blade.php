@extends('layouts.nav')
@section('content')
@section('scripts')
<script type="text/javascript" src="{{asset('js/js.js')}}"></script>
<div >
  <div class="row">
    <div class="col-10">
      <div class="title-section">
          <h2>Gestor de Peliculas</h2>
      </div>
    </div>
    <div class="col-2">
      <a href="{{ url('/afegir-pelicula') }}" class="content-add-movies btn btn-lg" type="submit">Añadir</a>
    </div>
  </div>
  <!--content table-->
  <div class="content-bootstrap">
    <div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Categoria</th>
            <th scope="col">Director</th>
            <th scope="col">Titulo</th>
            <th scope="col">Portada</th>
            <th scope="col">Descripción</th>
            <th scope="col">Valoración</th>
            <th scope="col">Año</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($peliculas as $pelicula)
          <tr>
            <th scope="row">{{$pelicula->id}}</th>
            @if(isset($pelicula->categorias->nombre))
            <td>{{$pelicula->categorias->nombre}}</td>
            @endif
            <td>{{$pelicula->director}}</td>
            <td>{{$pelicula->titulo}}</td>
            <td><img src="{{URL::asset('storage/'. $pelicula->portada)}}" width="100" height="150"></td>
            <td>{{$pelicula->descripcion}}</td>
            <td>{{$pelicula->valoracion}}</td>
            <td>{{$pelicula->año}}</td>
            <td><a id="tag-eliminar" href="{{ url('editar-pelicula', ['id' => $pelicula->id])}}" class="btn btn-lg" type="submit">Editar</a ><a id="{{$pelicula->id}}" class="btn btn-lg" type="submit" onclick="route(this.id)">Eliminar</a >
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!--Modal-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!--Content Modal-->
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Seguro que quieres eliminar el registro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-content-button-center modal-body">
            <div class="modal-button-center"><a id="tagEliminar" class="btn btn-lg" type="submit">Eliminar</a></div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div> 
  </div>
</div>
@endsection