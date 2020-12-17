<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  @section('scripts')
  <script type="text/javascript" src="{{asset('jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('jquery/jQuery-1.11.1.min.js')}}"></script>
  <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
  @section('links')
  <link rel="stylesheet" href="{{asset('jquery/jquery-ui-1.12.1.custom/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
</head>
<body>
	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    	<div>
	      <a href="{{ url('cms')}}" class="content-back btn btn-lg" type="submit">Inicio</a >
	    </div>
    </header>
    <main class="main-content">
        @yield('content')
        @yield('scripts')
    </main>
</body>
</html>