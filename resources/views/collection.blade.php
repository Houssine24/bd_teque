<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Collection de BD</title> 
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
      <a href="http://127.0.0.1:8000/consulter" class="btn btn-secondary" type="button">Consulter BD</a>
    </div>  
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une BD" aria-label="Recherche une BD">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Recherche</button>
    </form>
    <div class="element">
      <a href="http://127.0.0.1:8000" class="btn btn-secondary" type="button">Retour accueil</a>
    </div>
  </nav>
  @foreach ($Collection as $c)
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">{{$c->nom_collection}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @foreach ($c->les_bandes_dessinees as $bd)
                <img class="iconeCollec" src= "{{$bd->image_bd}}">
                <p class="modal-dialog">{{$bd->resume_bd}}</p>
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Ajout mes envies</button>
              <button type="button" class="btn btn-danger">Ajout mes collections</button>
            </div>
          </div>
        </div>
      </div>
  @endforeach
    <div class="container">
      <div class="row">
        @foreach ($Collection as $c)
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ $c->nom_collection }}</h4>
            <img class="card-img-top" src="{{$c->image_collection}}" data-toggle="modal" data-target="#exampleModalLong" >
            @foreach ($c->les_bandes_dessinees as $bd)
            <p>Bande dessinée : {{$bd->nom_bd}}</p>
            <img class="iconeCollec" src="{{$bd->image_bd}}">
            <p>Tome : {{$bd->tome_bd}}</p>
            @endforeach
          </div>
        </div>   
        @endforeach
      </div> 
    </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/appModal.js"></script>
</body>
</html>