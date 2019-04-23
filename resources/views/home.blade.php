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
                      <div class="card-body text-center">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                                  <b>Hello Again! </b>
                      </div>
                  </div><br>
              

                  <div class="card text-center" id="card">
                      <div class="card-header">Your recent activities:</div>
                      <div class="card-body">
                        <table>
                          <tr>
                            <th>Action</th>
                            <th>Subject</th>
                            <th>Type</th>
                            <th>At</th>
                          </tr>
                          @foreach($activities as $activity)
                          <tr>
                            <td>
                            @if( strpos( $activity->type, 'created' ) !== false)
                              <p>created</p>
                            @elseif ( strpos( $activity->type, 'updated' ) !== false)
                              <p>updated</p>
                            @elseif ( strpos( $activity->type, 'deleted' ) !== false)
                              <p>deleted</p>
                            @endif  
                            </td>
                            <td>
                              {{$activity->subject_type}}
                            </td>
                            <td>{{ $activity->subject_id }}</td>
                            <td>{{ $activity->created_at->diffForHumans() }}</td>
                          </tr>  
                          @endforeach
                        </table>
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