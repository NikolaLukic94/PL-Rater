@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <title>PLQR</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(isset($user))
            <div class="card">
                <div class="card-header text-center">Please submit all info:</div>
                <div class="card-body">
        <form action="/user/edit" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="name">
                <p>Username</p>
              </label>
            </div>
            <div class="col">
              <input name="name" value="{{$user->name}}" type="text" class="input" id="name">
            </div>
        </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="email">
                <p>Email</p>
              </label>
            </div>
            <div class="col">             
              <input name="email" value="{{$user->email}}" type="text" class="input" id="email">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_email_address">
                <p>Password</p>
              </label>
            </div>
              <div class="col"> 
                <input name="password" value="{{$user->password}}"  type="text" class="input" id="password">
              </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="created_at"></label>
              <p>Joined on</p>
            </div>
            <div class="col">             
              <input name="created_at" value="{{$user->created_at}}" type="text" class="input"  id="created_at">
            </div>
          </div>
        </div>    

    </div>
@endif    
        <div class="block">
          <div class="notification">
            <hr>
            <div class="delete"></div>
              <p class="text-center">Assign some privileges?</p>
          </div>
          <hr>
        </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">
          <p class="control">
         
                <button type="button" class="btn btn-outline-secondary">Update</button>
          
          </p>
          @include('errors')
    </form>     
                </div>

            </div>
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

</html>