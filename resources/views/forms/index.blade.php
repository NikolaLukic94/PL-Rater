@extends('layouts.app')
<div class="d-flex" id="wrapper">
@include('partials.sidebar')
  <div id="page-content-wrapper">
  @include('partials.navbar')
  <br>
  <div class="card container col-md-8">
    <div class="card-header text-center">Your forms:</div>
      <div class="card-body">
        @if($forms)
          @foreach($forms as $f)
            <tr>
              <td>
                <div class="row">
                  <div class="col">
                <p>{{ $f->name }} </p> 
                <a href="/form/download/{{$f->id}}" class="btn btn-primary float-right">Attachment</a>
                <a href="/forms/delete/{{$f->id}}" class="btn btn-primary float-right">Delete</a>
                </div></div>
                  <hr>
              </td>
            </tr>
          @endforeach
        @else    
          <p>You currently don have any forms yet!</p>
        @endif  
      </div>
      <button type="submit" href="/forms/create" class="btn btn-outline-secondary">Add new</button><br>
    </div>
  </div>
</div>
    <div class="container">{{ $forms->links() }}</div>
</div>
