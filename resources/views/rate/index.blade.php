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
    <div class="card-header">Your rates:</div>
      <div class="card-body">
        @if($rate)
          @foreach($rate as $r)
              <tr>
                  <td>
                      {{ $r->lob }}
                      <hr>
                  </td>
              </tr>
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

