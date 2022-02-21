<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>TEAM INFO:</h1>
    {{$team->name}}<br>
    {{$team->email}}<br>
    {{$team->adress}}<br>
    {{$team->city}}<br>
</body>
</html>