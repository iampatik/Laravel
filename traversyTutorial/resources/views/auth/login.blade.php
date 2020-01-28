@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign In</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                    <!-- login form -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                    placeholder="Username">
                            </div>
                            <span class="text-danger">
                                @if($errors->has('username'))
                                {{ $errors->first('username') }}
                                @endif
                            </span>
                        </div>
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
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
