@extends('layout.registration')

<<<<<<< HEAD
@section('title', 'Login')

@section('content')

<div class="col-sm-10 mt-10 ml-100 mb-5" id="formDiv">
    <form action="" method="post" class="form">
        <h1>Sign In</h1>
        @csrf

        <!-- login form -->
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="username">
=======
@section('title', 'login')

@section('content')

<div class="col-sm-10 mt-3 ml-100 mb-5" id="formDiv">
    <form action="" method="post" class="form">
        @csrf
        <h1>Sign In</h1>
      
      <!-- login form -->
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="username or email">
>>>>>>> 63f69351875192790a1958fd426c519634612ee4
            </div>
            <span class="text-danger">
                @if($errors->has('username'))
                {{ $errors->first('username') }}
                @endif
            </span>
        </div>
<<<<<<< HEAD


=======
      
        
>>>>>>> 63f69351875192790a1958fd426c519634612ee4
        <div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                    placeholder="Password">
            </div>
            <span class="text-danger">
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </span>
        </div>
<<<<<<< HEAD

        <div class="form-group" id="loginButton">
            <center>
                <button type="submit" name="login" class="btn btn-primary btn-md">Login</button>
            </center>
        </div>
    </form>
    <div class="text-center">Don't have an account yet? <a href="{{ route('signup') }}">Sign up here</a></div>
=======
       
        <div class="form-group" id="loginButton">
            <center>
                <button type="submit" name="login" class="btn btn-primary">login</button>
            </center>
        </div>
        Don't have an account yet? <a href="{{route('signup')}}">Sign up here</a>
    </form>
 
>>>>>>> 63f69351875192790a1958fd426c519634612ee4
</div>
@endsection('content')