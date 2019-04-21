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
    <div class="card-header text-center">Your rates:</div>
      <div class="card-body">
        @if($rate)
          @foreach($rate as $r)
          <div class="container">
          <div class="row">
              <tr>
                  <td>
                      {{ $r->lob }}
                  </td>
                  <th>
                    <div class="offset-md-4">
                    <form action="/rate/delete/{{ $r->id }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }} 
                        <button id="tt" type="submit" class="btn btn-primary col-md-offset-3"><i class="fa fa-trash"></i></button>
                    </form>
                    <br>   
                </div>
              </tr>

          </div>    
          </div>
          @endforeach
        @else    
          <p>You currently don have any defined yet!</p>
        @endif  
      </div>
      <button type="submit" href="/rate/define" class="btn btn-outline-secondary">Add new</button>
    </div>
  </div>
</div>


</body>
</html>

