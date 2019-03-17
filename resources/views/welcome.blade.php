@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <title>PLQR</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

      <div class="container">
          <div class="col">
                    <h1 class="mb-0">BG:{{$bgTime}}</h1>
                    <h1 class="mb-0">US:{{$usTime}}</h1>
                    <h1 class="mb-0">CA:{{$montrealTime}} </h1>   
            </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

</body>

</html>

