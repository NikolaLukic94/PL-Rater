@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Rating Worksheets:</div>
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
                  <th><abbr title="Named_insured">Named Insured</abbr></th>s
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Options</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
                </tr>
              </thead>
                @if($rw)
                  @foreach($rw as $r)
                      <tr>
                        <td>
                          @if(isset($t->created_at))
                            {{date('m/d/Y',strtotime($r->created_at))}}
                          @endif  
                        </td>                          
                        <td>
                            <a class="btn btn-primary" href="/rw/show/{{$r->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                    </tr>
                    @endif
                  @endforeach
                @else
                    <p>There are no RWs for this file! Go rate it!</p>
                @endif
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
