@extends('layouts/new');
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="d-flex" id="wrapper">
    <div id="page-content-wrapper">
    @include('partials.navbar')
    <br>
      <div class="container">
           <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card-register">
                <div class="card-header text-cent">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     

                        <div class="form-group row mb-0" id="reg-group">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="login">
                                    {{ __('Login') }}
                                </button>                     
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="/login/twitter">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="submit" class="btn btn-primary" id="/login/github">
                                    <i class="fab fa-github"></i>
                                </button>   

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a class="text-center" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->





