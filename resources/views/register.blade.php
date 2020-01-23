<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>
    <div class="container">
        <div class="signup-form col-sm-5 mt-sm-3" id="formDiv">
            <form action="" method="post">
                @csrf
                <div>
                    <center>
                        <br>
                        <img src="../image/registericon.png" alt="Avatar" id="avatar">
                        <p>Please fill all the fields to create an account!</p>
                        <hr>
                    </center>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                    </div>
                    <span>
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                    </div>
                    <span>
                        @if($errors->has('username'))
                            {{ $errors->first('username') }}
                        @endif
                    </span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    </div>
                    <span>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label><b>Gender:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="gender" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                        </label>
                    </div>
                </div>
                <div class="form-group" id="userType">
                    <div class="input-group">
                        <label><b>User Type:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="user_type" value="buyer" {{ old('user_type') === "buyer" ? 'checked' : '' }}>Buyer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="user_type" value="seller" {{ old('gender') === "seller" ? 'checked' : '' }}>Seller
                        </label>
                    </div>
                </div>
                <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" value="{{ old('password') }}" name="password" placeholder="Password">
                        </div>
                        <span>
                            @if($errors->has('password'))
                                {{ $errors->first('password') }}
                            @endif
                        </span>
                    </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group" id="registerButton">
                    <center>
                    <button type="submit" name="submit"  class="btn btn-primary btn-md">Register</button>
                    </center>
                </div>
            </form>
            <div class="text-center">Already have an account? <a href="/signin">Login here</a></div>
        </div>
    </div>
</body>
</html>
