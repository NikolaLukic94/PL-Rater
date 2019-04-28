<div class="row">        
        <div class="col-md-4 form-group">
          <label for="search_named_insured">Named Insured:</label>
          <input type="text"  name="search_named_insured" id="search_named_insured" class="form-control-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">

        </div> 
        <div class="col-md-4 form-group">

        </div>  
        <div class="col-md-4 form-group">

        </div> 
        <div class="col-md-4 form-group">

        </div> 
        <div class="col-md-4 form-group">

        </div>                 

        <div class="col-md-4 form-group">

        </div> 
        <div class="col-md-4 form-group">

        </div>  
        </div>
        <select class="col-md-4 form-control-sm" name="options" class="col-md-4 form-group">
          <option value="">--- State ---</option>
          <option  value="LA">LA</option>
          <option  value="FL">FL</option>
          <option  value="CA">CA</option>
          <option  value="TX">TX</option>          
          <option  value="MS">MS</option>
        </select>        
        <select class="form-control-sm" name="options" class="col-md-4 form-group">
          <option value="">--- Status ---</option>
          <option  value="quoted">Quoted</option>
          <option  value="bind_request">Bind request</option>
          <option  value="bound">Bound</option>
          <option  value="policy_issued">Policy issued</option>          
          <option  value="Closed">Closed</option>
        </select>   
        <div class="col-md-4 form-group">

        </div>            
      <div class="form-row">
        <div class="col-md-12 col-lg-12">
          <button type="submit" href="/file/index" class="btn btn-custom">
            <i class="fa fa-search" aria-hidden="true"></i>Search</button>
          <a href="/file/search" class="btn btn-custom">
            <i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
        </div>
      </div>