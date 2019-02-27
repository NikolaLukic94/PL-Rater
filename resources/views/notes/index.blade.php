@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Notes:</div>
          <div class="card-body">
            <form action="" method="">
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="">Title</abbr></th>
                  <th><abbr title="">Text</abbr></th>
                  <th><abbr title="">Created_at</abbr></th>
                  <th><abbr title="">Created_by</abbr></th>                  
                </tr>
              </thead>
                @if($notes)
                  @foreach($notes as $note)
                      <tr>
                        <td>
                          @if(isset($notes->title))  
                            {{ $notes->title }}
                          @endif  
                        </td>
                        <td>
                          @if(isset($notes->title))  
                            {{ $notes->text }}
                          @endif                           
                        </td>
                        <td>
                          @if(isset($notes->title))  
                            {{ $notes->created_at }}
                          @endif                           
                        </td>
                        <td>
                          @if(isset($notes->title))  
                            {{ $notes->created_by }}
                          @endif                            
                        </td>                                                                           
                        <td>   
                            <form action="/subs/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
                        </td>                                              
                    </tr>
                  @endforeach
                @else
                    <p>There are no notes!</p>
                @endif
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  <button>create</button>    
</div>

@endsection