@extends('layouts.nav')
@section('content')
      <main class="form-signin">
        <div class="title-section">
          <div class="row">
            <div class="col-10"><h1 class="h3 mb-3 fw-normal">Registro de CATEGORIAS</h1></div>
            <div class="col-2"><a href="{{ url('categorias')}}" class="content-white btn btn-lg" type="submit"><- Volver</a ></div>
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
            <form method="POST" action="/update-categoria" enctype="multipart/form-data">
              @csrf
              <div class="title-categori-form"> 
                <h4 class="h4 mb-3 fw-normal">{{$categoria->nombre}}</h4>
              </div>
              <div class="items-conten-form"> 
                <input type="hidden" id="inputId" name="id" class="item-control form-control" value="{{$categoria->id}}">
                <input type="text" id="inputNombre" name="nombre" class="item-control form-control" value="{{$categoria->nombre}}" autofocus>
                <textarea type="text" id="inputTitulo" name="descripcion" class="item-control form-control" value="{{$categoria->descripcion}}" rows="6" cols="50">{{$categoria->descripcion}}</textarea>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Guardar</button>
              </div>
            </form>
        </div>
      </main>
@endsection
