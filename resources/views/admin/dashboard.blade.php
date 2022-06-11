<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}"/>
    @yield('css')
</head>
<body>

    <div class="navbar">
        <input id="check" type="checkbox"/>
        <label for="check" class="btn"><i class="fas fa-bars"></i></label>
        <div class="logo">FootBall</div>
        <ul>

            <li><a href="{{route('team.index')}}">Teams</a></li>
            <li><a href="{{route('player.index')}}">Players</a></li>
            <li><a href="{{route('matches.index')}}">Matches</a></li>
            <li><a href="{{route('special.index')}}">Special Position</a></li>

            <li><a href="{{ Route('logout') }}">Logout </a></li>

        </ul>


    </div>

    <div class="inner-content">

        @yield('content')
    </div>




</body>
</html>
