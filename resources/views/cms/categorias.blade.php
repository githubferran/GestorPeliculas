@extends('layouts.nav')
@section('content')
@section('scripts')
<script type="text/javascript" src="{{asset('js/js.js')}}"></script>
  <div class="content-movies-gestor">
    <div class="row">
    <div class="col-10">
      <div class="title-section">
          <h2>Gestor de Categorias</h2>
      </div>
    </div>
    <div class="col-2">
      <a href="{{ url('/afegir-categoria') }}" class="content-add-movies btn btn-lg" type="submit">Añadir</a>
    </div>
  </div>
    <div class="content-bootstrap">
      <div>
        <div>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categorias as $categoria)
              <tr>
                <th scope="row">{{$categoria->id}}</th>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td><a href="{{ url('editar-categoria', ['id' => $categoria->id])}}" class="btn btn-lg" type="submit">Editar</a ><a id="{{$categoria->id}}" class="btn btn-lg" type="submit" onclick="eliminarCategoria(this.id)">Eliminar</a ></td>
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
  </div>
@endsection