<!DOCTYPE html>
<html>

<head>
    <title>tamBUY(Admin) - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="name">
            <a class="navbar-brand" href="{{ route('admin_home') }}"><img id="name" src="../assets/name.png"
                    alt="name"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <form method="post" action="{{ route('admin_search') }}" class="form-inline my-2 my-lg-0">
        @csrf
            <input class="form-control mr-sm-2 btn-lg" name="product_title" type="search" placeholder="Search Product"
                aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit">Search</button>
        </form>
        <span class="navbar-text">
        </span>
        <a href="{{ route('admin_addProduct') }}"><button class="btn btn-success my-2 my-sm-0 btn-lg"
                type="submit">Add Product</button></a>
    </nav>

    <div class="sidenav">
        <img class="btn" src="../assets/logo.png" alt="profile" id="profile" width='150'>
        <a href="{{ route('admin_home') }}">Home</a>
        <a href="{{ route('admin_pendings') }}">Pendings</a>
        <a href="{{ route('admin_paid_items') }}">Paid Items</a>
        <a href="{{ route('user.logout') }}">Logout</a>
    </div>

    <div class="container w-90">
        @yield('content')
    </div>
</body>

</html>