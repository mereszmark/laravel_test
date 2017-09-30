<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kezdő Laravel projekt</title>

   <!-- Bootstrap CSS served from a CDN -->
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"
   rel="stylesheet">
   <link rel="stylesheet" href="{{ URL::asset('/css/all.css') }}" />
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
  <h1 class="h4">Új felhasználó felvétele</h1>


  <form  class="form-inline" action=/adduser method="get">
   <label >Név:</label>
   <input  class="form-control input-sm" type="text" name="name" value="Jakab">
<button type="submit" class="btn btn-primary">Felhasználó felvétele az adatbázisba</button>
<a class="btn btn-success margin-up" href="/list" role="button">Vissza a kezdőoldalra</a>
  </form>
</body>
</html>
