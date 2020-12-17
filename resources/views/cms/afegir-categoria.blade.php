@extends('layouts.nav')
@section('content')

<main class="form-signin">
  <div class="title-section">
      <div class="row">
          <div class="col-10">
              <h1 class="h3 mb-3 fw-normal">Porfabor introduce los datos de la categoria a registrar</h1>
              <h4 class="h4 mb-3 fw-normal">Categoria y Director</h4>
          </div>
          <div class="col-2">
            <a href="{{ url('categorias')}}" class="content-white btn btn-lg" type="submit"><- Volver</a >
          </div>
      </div>
  </div>
  <div class="items-conten-form">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <form method="POST" action="/guardar-categoria" enctype="multipart/form-data">
        @csrf
        <input type="text" id="inputNombre"  name="nombre" class="item-control form-control" placeholder="Nombre" >
        <textarea  type="text" id="inpuDescripcion" name="descripcion" class="item-control form-control" placeholder="Descripcions" rows="6" cols="50" ></textarea>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Guardar</button>
      </form>
  </div>
</main>
@endsection
