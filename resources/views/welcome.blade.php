@extends('layout')
@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="">Submissions</a>
                        <a href="Quotes">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Where do you wanna go?:</div>
                            <div class="card-body">
                                <ul>
                                    <li><i class="fa fa-arrows"></i><a href="#">Accounts</a></li>
                                    <hr>    
                                    <li><i class="fa fa-battery-2"></i><a href="/subs/index">Submissions</a></li>
                                            <ul>    
                                                <li><a href="/subs/create">New</a>
                                                <li><a href="/subs/search">Subs</a></li>
                                                <li><a href="/subs/index">Emails</a></li>
                                            </ul>
                                    <hr>    
                                    <li class="active"><i class="fa fa-bell"></i><a href="/prepemail">Emails</a></li>
                                    <hr>    
                                    <li><i class="fa fa-bicycle"></i><a href="#">Follow ups</a></li>
                                    <hr>    
                                    <li><i class="fa fa-circle"></i><a href="#">circle</a></li>
                                    <hr>    
                                    <li><i class="fa fa-crosshairs"></i><a href="#">crosshairs</a></li>
                                    <hr>    
                                    <li><i class="fa fa-deaf"></i><a href="#">Candidates</a></li>
                                    <hr>    
                                    <li><i class="fa fa-desktop"></i><a href="#">desktop</a></li>
                                    <hr>    
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">dot</a></li>
                                    <hr>    
                                    <li><i class="fa fa-folder"></i><a href="#">folder</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>



