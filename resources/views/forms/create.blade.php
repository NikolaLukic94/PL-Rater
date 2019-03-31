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
            <div class="card">
                <div class="card-header text-center">Please verify current info:</div>
                <div class="card-body">
        <form action="/forms/create" method="POST" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="name">
                Form Name
              </label>
            </div>
            <div class="col">
              <input name="form_name" type="text" class="input" id="form_name" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="edition_date">
                Edition date
              </label>
            </div>
            <div class="col">             
              <input name="eddition_date" type="date" class="input" id="edition_date" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="text">
                Text
              </label>
            </div>
            <div class="col"> 
              <input name="text" type="text" class="input" id="text">
            </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="attachment">
                Attachment
              </label>
            </div>
            <div class="col">             
              <input name="attachment" type="file" class="input" id="attachment" required>
            </div>
          </div>
        </div>    
        <hr>
        <div class="block">
          <button type="submit" class="btn btn-outline-secondary">Save</button>
        </div>
    </div>
        <div class="block">
          <div class="notification">
            <hr>
            <div class="delete"></div>
              <p class="text-center"></p>
          </div>
          <hr>
        </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">

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
