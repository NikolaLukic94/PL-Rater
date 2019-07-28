@extends('layouts.app')

<div class="d-flex" id="wrapper">
  @include('partials.sidebar')
  <div id="page-content-wrapper">
  @include('partials.navbar') 
  <br>
    <div class="container text-center">
      <div class="card">
        <table> 
          <tr>
            <th></th>
            <th><abbr title="Named_insured">Named Insured</abbr></th>
            <th><abbr title="">lob</abbr></th>
            <th><abbr title="">Effective date</abbr></th>                 
            <th><abbr title="">State</abbr></th>
            <th><abbr title="">Agency</abbr></th>
            <th><abbr title="">Agent</abbr></th>
            <th><abbr title="">Created at</abbr></th>                  
            <th><abbr title=""></abbr></th>                    
            <th><abbr title=""></abbr></th>                  
            <th><abbr title=""></abbr></th>
          </tr>
          <tr>
              @if($submission)
                @foreach($submission as $sub)
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox">
                        </label>                            
                      </td>
                      <td>
                        @if(isset($sub->named_insured))
                          {{ $sub->named_insured }}
                        @endif                           
                      </td>
                      <td>
                        @if(isset($sub->lob))
                          {{ $sub->lob }}
                        @endif                           
                      </td>
                      <td>
                        @if(isset($sub->effective_date))
                          {{ $sub->effective_date }}
                        @endif                           
                      </td>
                       
                      <td>
                        @if(isset($sub->location_address_state))
                          {{ $sub->location_address_state }}
                        @endif                          
                      </td>
                      <td>
                        @if(isset($sub->agency_name))
                        {{ $sub->agency_name }}
                        @endif                          
                      </td>
                      <td>
                        @if(isset($sub->agent_name))
                        {{ $sub->agent_name }}
                        @endif                           
                      </td>
                      <td>
                        @if(isset($sub->created_at))
                          {{date('m/d/Y',strtotime($sub->created_at))}}
                        @endif  
                      </td>                        
                      <td>
                        <a class="btn btn-primary" href="/file/index" role="button"><i class="fas fa-search"></i></a>
                      </td>   
                      <td>
                           <a class="btn btn-primary" href="/subs/emails/show/{{$sub->id}}" role="button"><i class="fa fa-eye"></i></a>                     
                        </form>                            
                      </td>                                     
                      <td>
                          <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a> 
                      </td> 
                      <td>   
                          <form action="/subs/emails/delete/{{ $sub->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }} 
                             <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                          </form>                                  
                      </td>                                              
                  </tr>
                @endforeach
              @else
                  <p>There are no new emails!</p>
              @endif
          </tr>
        </table>
      </div>
    </div>
    <br>
    <div class="d-flex justify-content-center">{{ $submission->links() }}</div>
  </div>
</div>
<style>
  input, select {
  width: 100%;
  border-radius:25px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

table td{
  padding-bottom: 4px;
}

</style>





