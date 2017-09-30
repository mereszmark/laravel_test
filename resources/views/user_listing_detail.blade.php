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
  <h1 class="h4">A felhasználó adatai</h1>

  <form  class="form-inline" action=/updateuser method="get">
   <label >Azonosító:</label>
   {{$user->user_id}}
   <input type="hidden" name="id" value="{{$user->user_id}}">
   <label >Név:</label>
   <input  class="form-control mb-2 mr-sm-2 mb-sm-0" type="text" name="name" value="{{$user->username}}">

<button type="submit" class="btn btn-primary">Név módosítása</button>
  </form>
  <form class="form-inline" action=/deleteuser method="get">
    <input type="hidden" name="id" value="{{$user->user_id}}">
    <a class="btn btn-success " href="/list" role="button">Vissza a kezdőoldalra</a>
    <button type="submit" class="btn btn-danger">Törlés az adatbázisból</button>
  </form>
</body>
</html>
