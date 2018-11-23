<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BD Teque</title>
        <link href="{{('/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="titreHome">
        	<h2>BD Teque</h2>
        </div>
        <div class="contentHome">
        	<div class="consulteBD">
        		<img class="imgHome"src="/images/bd.jpg">
        		<div class="element">
        			<a href="http://127.0.0.1:8000/consulter" class="btn btn-secondary" type="button">Consulter les BD</a>
        		</div>	
        	</div>
        	<div class="decouvrirBD">
        		<img class="imgHome" src="/images/bd.jpg">
        		<div class="element">
        			<a href="#" class="btn btn-secondary" type="button">Découvrir des BD</a>
        		</div>
        	</div>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>    
        ²<script src="{{ asset('js/bootstrap.min.js') }}"></script>   
    </body>
</html>    