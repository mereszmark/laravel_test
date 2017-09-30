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
  <h1 class="h4">Felhasználói adatbázis</h1>
<div class="container">
  @if (count($users) > 0)

  <table class="table table-striped table-bordered">
    <thead>
   <tr>
     <th class="col-md-1">#Azonosító</th>
     <th class="col-md-11">Név</th>
   </tr>
 </thead>
  <tbody>
    @foreach($users as $user)


    <tr>
      <th scope="row">{{$user->user_id}}</th>
      <td><a href=user_detail.php?userid={{$user->user_id}}>{{$user->username}}</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>
@else
<h3 class="redcenter">
    Kérlek vegyél fel embert
    <h3>
@endif

  <a class="btn btn-default" href="/add" role="button">Új ember felvétele</a>
</div>
</body>
</html>
