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
    @include('partials.navbar') <!--
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="Named_insured">Named Insured</abbr></th>
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status = 'not_logged')
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
                          <p>{{ $sub->agingDate() }}</p>
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
                          <a class="btn btn-primary" href="/subs/emails/search" role="button"><i class="fas fa-search-plus"></i></a> &nbsp;        
 
                        </td>   
                        <td>
                            <a class="btn btn-primary" href="/subs/emails/show/{{$sub->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                        <td>
                            <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button">Log</a> 
                        </td> 
                        <td>   
                            <form action="/subs/emails/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
                        </td>                                              
                    </tr>
                    @endif
                  @endforeach

                @else
                    <p>There are no new emails!</p>
                @endif
            </table>
    <!-- /#page-content-wrapper 
      <div class="container">{{ $submission->links() }}</div>
  </div>

                  
  <!-- /#wrapper 
</body>
</html>
-->
<div class="container">
<div class="column-md-10">
        <div class="column">
          <h1 class="title">Received Sumissions</h1>
        </div>
        <div class="column">
          <a href="/manage/users/create" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                  <th></th>
                  <th><abbr title="Named_insured">Named Insured</abbr></th>
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
              </tr>
            </thead>

            <tbody>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status = 'not_logged')
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
                          <p>{{ $sub->agingDate() }}</p>
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
                          <a class="btn btn-primary" href="/subs/emails/search" role="button"><i class="fas fa-search-plus"></i></a> &nbsp;        
 
                        </td>   
                        <td>
                            <a class="btn btn-primary" href="/subs/emails/show/{{$sub->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                        <td>
                            <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button">Log</a> 
                        </td> 
                        <td>   
                            <form action="/subs/emails/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
                        </td>                                              
                    </tr>
                    @endif
                  @endforeach

                @else
                    <p>There are no new emails!</p>
                @endif
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
      <br>
       {{ $submission->links() }}
    </div>
    <!-- /#page-content-wrapper -->
    <div class="container">
<table>
    <tr>
        <td class="shrink">element1</td>
        <td class="shrink">data</td>
        <td class="shrink">junk here</td>
        <td class="expand">last column</td>
    </tr>
    <tr>
        <td class="shrink">elem</td>
        <td class="shrink">more data</td>
        <td class="shrink">other stuff</td>
        <td class="expand">again, last column</td>
    </tr>
    <tr>
        <td class="shrink">more</td>
        <td class="shrink">of </td>
        <td class="shrink">these</td>
        <td class="expand">rows</td>
    </tr>
</table>
</div>



  </div>
  <!-- /#wrapper -->
</div>


</body>

</html>






