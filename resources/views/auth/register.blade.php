@extends('layouts/new');
<div class="d-flex" id="wrapper"><!-- class="d-flex" id="wrapper" start -->
    <div id="page-content-wrapper"><!-- page-content-wrapper start -->
    @include('partials.navbar')
    <br>
    <div class="container" id="register_box"><!-- class="container" id="register_box" start -->
    <div class="row justify-content-center"><!-- row justify-content-center start -->
        <div class="col-md-8"><!-- col-md-8 start -->
            <div class="card"><!-- card start -->
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" onsubmit="return validate(this)">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email"  required>

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
                                 <input type="password" id="pwd" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" onkeyup="validatePassword(this.value);"/ name="password" required><span id="msg"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm"  required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">                        
                            <p><b>Are you:</b></p>
                            </div>
                        </div>                        
                        <div class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"  id="login">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <br>
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
                    </form>
                </div><!-- card start -->
            </div><!-- col-md-8 start -->
        </div><!-- row justify-content-center start -->
    </div><!-- class="container" id="register_box" end -->
</div><!-- page-content-wrapper end -->
</div><!-- class="d-flex" id="wrapper" end -->

<script>
     function validate(form)
     {
         fail = validateName(form.name.value)
         fail += validateEmail(form.email.value)
         fail += validatePassword(form.password.value)
         if (fail == "") return true
         else { alert(fail); return false }
    }

    function validateName(field)
    {
        return (field == "") ? "No Name was entered.\n" : ""
    }

    function validateEmail(field)
    {
     return (field == "") ? "No Email was entered.\n" : ""
    }
    
    function validateName(field)
    {
         if (field == "") return "No Username was entered.\n"
         else if (field.length < 5)
         return "Usernames/Full names must be at least 5 characters.\n"
         else if (/[^a-zA-Z0-9_-]/.test(field))
         return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
         return ""
    }

    function validatePassword(field)
    {
         if (field == "") return "No Password was entered.\n"
         else if (field.length < 8)
         return "Passwords must be at least 8 characters.\n"
         else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
         !/[0-9]/.test(field))
         return "Passwords require one each of a-z, A-Z and 0-9.\n"
         return ""
    }

    function validateEmail(field)
    {
        if (field == "") return "No Email was entered.\n"
        else if (!((field.indexOf(".") > 0) &&
        (field.indexOf("@") > 0)) ||
        /[^a-zA-Z0-9.@_-]/.test(field))
        return "The Email address is invalid.\n"
        return ""

</script>


