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
          <table>
            <tr>
              <td>
                <div class="row">
                  <div class="col">
                    <p>{{ $f->name }} </p> 
              </td>
              <td>
                <a href="/form/download/{{$f->id}}" class="btn btn-primary float-right"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;  
              </td>               
              <td>      
                    
                    <form action="/forms/delete/{{ $f->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }} 
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                    </form> 
              </td>
            </tr>
            </table>
          @endforeach
        @else    
          <p>You currently don have any forms yet!</p>
        @endif  
      </div>
      <button type="submit" href="/forms/create" class="btn btn-outline-secondary"><a href="/forms/create">Add new</a></button><br>
    </div>
  </div>
</div>
    <div class="container">{{ $forms->links() }}</div>
</div>
