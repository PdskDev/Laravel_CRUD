
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Etudiants CRUD Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Favicons -->
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

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
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/offcanvas.css')}}" rel="stylesheet">
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
  </head>
  <body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EtudiantCrud</a>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('accueil')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('etudiants.index') }}">Etudiants</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<main class="container">
    
    @yield("contenu")


</main>
    
  </body>
</html>
