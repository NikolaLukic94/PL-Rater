@extends('layouts.app')
  <div class="d-flex" id="wrapper">
    @include('partials.sidebar')
    <div id="page-content-wrapper">
    @include('partials.navbar')
    <br>
  <div class="container">
    <div class="col">
        <form class="search-form search-form-basic" action="/file/index" method="post">
      {{ csrf_field() }}
    <div class="form-row"><!--form-row start -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="Named Insured"  name="search_named_insured" id="search_named_insured" class="form-control-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="Additional NI/DBA:" name="search_addl_ni_dba" id="search_addl_ni_dba" class="form-control-sm" @if(isset(Session::get('inputs')['search_addl_ni_dba'])) value="{{ Session::get('inputs')['search_addl_ni_dba'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="LOB" name="search_lob" id="search_lob" class="form-control-sm" placeholder="" @if(isset(Session::get('inputs')['search_lob'])) value="{{ Session::get('inputs')['search_lob'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="Submission number:" name="search_submission_number" id="search_submission_number" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_submission_number'])) value="{{ Session::get('inputs')['search_submission_number'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="Agency" name="search_agency_name" id="search_agency_name" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_agency_name'])) value="{{ Session::get('inputs')['search_agency_name'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <input type="text" placeholder="Agent" name="search_agent_name" id="search_agent_name" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_agent_name'])) value="{{ Session::get('inputs')['search_agent_name'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <label for="search_from_date">From:</label>
            <input type="date" name="search_from_date" id="search_from_date" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <label for="search_to_date">To:</label>
            <input type="date" name="search_to_date" id="search_to_date" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_to_date'] }}" @endif>
      </div><!--form-group col-md-4 end -->  
      <div class="form-group col-md-4"><!--form-group col-md-4 start -->
            <label for="search_effective_date">Effective:</label>      
            <input type="date" placeholder="Effective_date:" name="search_effective_date" id="search_effective_date" class="form-control-sm" 
             @if(isset(Session::get('inputs')['search_effective_date'])) value="{{ Session::get('inputs')['search_effective_date'] }}" @endif>
      </div><!--form-group col-md-4 end -->
      <div class="form-group col-md-6"><!--form-group col-md-6 start -->
          <select class="form-control-sm" name="options" class="col-md-6 form-group">
            <option value="">--- State ---</option>
            <option  value="LA">LA</option>
            <option  value="FL">FL</option>
            <option  value="CA">CA</option>
            <option  value="TX">TX</option>          
            <option  value="MS">MS</option>
          </select><!--form-group col-md-6 end -->
      </div>     
      <div class="form-group col-md-6"><!--form-group col-md-6 start -->
          <select class="form-control-sm" name="options" class="col-md-6 form-group">
            <option value="">--- Status ---</option>
            <option  value="quoted">Quoted</option>
            <option  value="bind_request">Bind request</option>
            <option  value="bound">Bound</option>
            <option  value="policy_issued">Policy issued</option>          
            <option  value="Closed">Closed</option>
          </select>
      </div><!--form-group col-md-6 end -->         
    </div><!--form-row start -->
        <div class="form-row">
          <div class="col-md-12 col-lg-12">
            <button type="submit" href="/file/index" class="btn btn-custom">
              <i class="fa fa-search" aria-hidden="true"></i>Search</button>
          </div>
        </div>
      </form>
    </div>

<!-- results -->  
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b>Accounts:</b></div>
          <div class="card-body">
            <form action="/rate/create" method="POST">
              {{ csrf_field() }}
                <table>
                  <tr>
                    <th>
                    <label class="checkbox">
                        <input type="checkbox">
                      </label>
                    </th> 
                    <th><abbr title="Named_insured">Named Insured</abbr></th>
                    <th><abbr title="">lob</abbr></th>
                    <th><abbr title="">Effective date</abbr></th>
                    <th><abbr title="">State</abbr></th>
                    <th><abbr title="">Agency</abbr></th>
                    <th><abbr title="">Agent</abbr></th>
                    <th><abbr title=""></abbr></th>
                    <th><abbr title=""></abbr></th>  
                    <th><abbr title=""></abbr></th>
                  </tr>
                  <tr>
                      @if($files)
                        @foreach($files as $file)
                            <tr>
                              <td>
                                <label class="checkbox">
                                  <input type="checkbox">
                                </label>
                              </td>
                              <td>
                                @if(isset($file->named_insured))
                                {{ $file->named_insured }}
                                @endif
                              </td>
                              <td>
                                {{ $file->lob }}
                              </td>
                              <td>
                                {{ $file->effective_date }}
                              </td>
                              <td>
                                {{ $file->location_address_state }}
                              </td>
                              <td>
                                {{ $file->agency_name }}
                              </td>
                              <td>
                                {{ $file->agent_name }}
                              </td>
                              <td> 
                                <a class="btn btn-primary" href="/file/show/{{$file->id}}" role="button"><i class="fa fa-eye"></i></a>        
                              </td> 
                              <td>
                                <a class="btn btn-primary" href="/rater/index/{{$file->id}}" role="button"><i class="fas fa-dollar-sign"></i></a>  
                              </td>                                                        
                            </tr>
                            @endforeach
                          @else
                        <p>There are no new emails!</p>
                      @endif
                    </tr>
                  </table>
                </form>   
                <div class="d-flex justify-content-center">{{ $files->links() }}</div>
              </div>  
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

<style type="text/css">
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

