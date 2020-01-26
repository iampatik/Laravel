<!DOCTYPE html>
<html>

<head>
    <title>tamBUY - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="name">
            <a class="navbar-brand" href="{{ route('user_home') }}"><img id="name" src="./assets/name.png"
                    alt="name"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ route('signup') }}"><button class="btn btn-outline-success my-2 my-sm-0 btn-md"
                    type="submit">Sign up</button></a>
        </form>
        <span class="navbar-text">
        </span>
        <form class="form-inline my-2 my-lg-0">
            <a href=""><button class="btn btn-success my-2 my-sm-0 btn-md"
                    type="submit">Login</button></a>
        </form>
        <span class="navbar-text">
        </span>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>