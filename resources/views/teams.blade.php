<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Teams</h1>
   <ul>
        @foreach($teams as $team)
       <p>TEAM:</p> <a href='/team/{{$team->id}}'>{{$team->name}}</a> <br/>
        @endforeach
   </ul>
</body>
</html>