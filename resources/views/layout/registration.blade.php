<!DOCTYPE html>
<html>

<head>
    <title>tamBUY - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="name">
            <a class="navbar-brand" href="{{route('user_home')}}"><img id="name" src="./assets/name.png"
                    alt="name"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{route('signup')}}"><button class="btn btn-outline-success my-2 my-sm-0 btn-md"
                    type="button">Sign up</button></a>
        </form>
        <span class="navbar-text">
        </span>
        <form class="form-inline my-2 my-lg-0">
        <!-- marion ni nga login -->
            <a href="{{route('login')}}"><button class="btn btn-success my-2 my-sm-0 btn-md"
                    type="button">Login</button></a>
        </form>
        <span class="navbar-text">
        </span>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>