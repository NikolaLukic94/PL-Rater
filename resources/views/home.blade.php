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
    <br>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card" id="card">
                      <div class="card-header"></div>
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                                  Hello Again!
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
