<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consulter des BD</title> 
  <link href="{{('/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="element">
      <div class="btn-group" role="group">
        <a href="http://127.0.0.1:8000/" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte
        </a>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="#">Mes envies</a>
          <a class="dropdown-item" href="#">Mes BD</a>
          <a class="dropdown-item" href="#">Mes collections</a>
          <a class="dropdown-item" href="#">Mes avis</a>
        </div>
      </div>
    </div>
    <div class="element">
      <a href="http://127.0.0.1:8000/collection" class="btn btn-secondary" type="button">Collections</a>
    </div>  
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une BD" aria-label="Recherche une BD">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Recherche</button>
    </form>
    <div class="element">
      <a href="http://127.0.0.1:8000" class="btn btn-secondary" type="button">Retour accueil</a>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      @foreach ($Bd as $Bd)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{ $Bd->nom_bd }}</h4>
        </div>
        <form action="consulte" method="get">
          <button class="infoBD" name="info" value="{{ $Bd->id_bd }}">
            <img class="card-img-top" src="{{ $Bd->image_bd }}">
          </button>
        </form>
      </div>             
      @endforeach
      @if (isset($_GET["info"]))
      <div class="card description">
        <div class="card-body">
          <h4 class="card-title">Déscription</h4>
        </div>
        <strong><label>Histoire</label></strong>
        <p>{{ $Bd->resume_bd }}</p>
        <strong><label>Tome</label></strong>
        <p>{{ $Bd->tome_bd }}</p>
        <strong><label>Auteur</label></strong>
        <p>{{ $Bd->auteur_bd }}</p>
      </div>  
      @endif
    </div> 
  </div>  
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>