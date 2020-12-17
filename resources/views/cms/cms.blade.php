<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form method="POST" action="/save" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Quina acció vols realitzar</h1>
        <div class="position-button">
            <div class="row">
                <div class="col-4"><a  href="{{ url('/directors') }}" class="btn btn-lg btn-primary" type="submit">Gestionar Directors</a></div>
                <div class="col-4"><a  href="{{ url('/peliculas') }}" class="btn btn-lg btn-primary" type="submit">Gestionar Pelìculas</a></div>
                <div class="col-4"><a  href="{{ url('/categorias') }}" class="btn btn-lg btn-primary" type="submit">Gestionar Categorìas</a></div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form>
    </main>
  </body>
</html>
