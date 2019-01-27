@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Subs per agencies:</div>
            <div class="card-body">
              @foreach($countPerAgency as $key => $value) 
                <div class="container">
                  <div class="row">
                    <div class="col">
                        {{$key}}
                    </div>
                    <div class="col">
                        {{$value}}
                    </div>                    
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Subs per LOB:</div>        
            <div class="card-body">
              @foreach($countPerLob as $key => $value) 
                <div class="container">
                  <div class="row">
                    <div class="col">
                        {{$key}}
                    </div>
                    <div class="col">
                        {{$value}}
                    </div>                    
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>   
      </div>
      <hr>  
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Subs per State:</div>        
            <div class="card-body">
              @foreach($countPerState as $key => $value) 
                <div class="container">
                  <div class="row">
                    <div class="col">
                        {{$key}}
                    </div>
                    <div class="col">
                        {{$value}}
                    </div>                    
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>   
      </div>
      <hr>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Subs per Type of Construction:</div>
            <div class="card-body">
              @foreach($countPerConstructionType as $key => $value) 
                <div class="container">
                  <div class="row">
                    <div class="col">
                        {{$key}}
                    </div>
                    <div class="col">
                        {{$value}}
                    </div>                    
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Subs per PC:</div>        
            <div class="card-body">
              @foreach($countPerProtectionClasses as $key => $value) 
                <div class="container">
                  <div class="row">
                    <div class="col">
                      PC:   {{$key}}
                    </div>
                    <div class="col">
                        {{$value}}
                    </div>                    
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>   
      </div>
      <hr>        
      </div>
    </div>
  </div>
  </div>
</div>  
@endsection
