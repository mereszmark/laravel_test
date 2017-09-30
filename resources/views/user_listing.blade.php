<!DOCTYPE html>
<html>
<head>
</head>
<body>
    @foreach($users as $user)
    <a href=user_detail.php?userid={{$user->user_id}}>{{$user->username}}</a>;
    @endforeach
 
</body>
</html>