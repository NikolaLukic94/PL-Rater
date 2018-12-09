<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<form class="search-form search-form-basic" action="/tickets" method="post">
		{{ csrf_field() }}
			<div class="form-row">				
				<div class="col-md-4 form-group">
					<label for="ticket_name">Ticket name:</label>
					<input type="text" name="ticket_name" id="ticket_name" class="form-control" @if(isset(Session::get('inputs')['ticket_name'])) value="{{ Session::get('inputs')['ticket_name'] }}" @endif>
				</div> 
				<div class="col-md-4 form-group">
					<label for="ticket_category">Ticket category:</label>
					<input type="text" name="ticket_category" id="ticket_category" class="form-control" @if(isset(Session::get('inputs')['ticket_category'])) value="{{ Session::get('inputs')['ticket_category'] }}" @endif>
				</div> 
				<div class="col-md-4 form-group">
					<label for="ticket_type">Ticket type:</label>
					<input type="text" name="ticket_type" id="ticket_type" class="form-control" placeholder="" @if(isset(Session::get('inputs')['ticket_type'])) value="{{ Session::get('inputs')['ticket_type'] }}" @endif>
				</div>  
				<!-- ticket priority high or low -->
            
				<input type="radio" name="high" value="urgent"/>
				<input type="radio" name="low" value="not urgent"/>
<!--
				<div class="col-md-4 form-group">
					<label for="search_from_date">From:</label>
					<input type="date" name="search_from_date" id="search_from_date" class="form-control" 
					 @if(isset(Session::get('inputs')['search_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
				</div> 
				<div class="col-md-4 form-group">
					<label for="search_to_date">To:</label>
					<input type="date" name="search_to_date" id="search_to_date" class="form-control" 
					 @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_to_date'] }}" @endif>
				</div> 	
			</div>      -->
			<div class="form-row">
				<div class="col-md-12 col-lg-12">
					<button type="submit" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
					<a href="/users" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
				</div>
			</div>
		</form>
	</div>
		<table class="table data-table">
		<h1>Candidates</h1>
			<thead>
				<tr>
					<th>Round #</th>
					<th>First Name</th>
					<th class="align-left">Date applied</th>	
					<th class="align-left">Office location</th>
					<th class="align-left">Last name</th>
					<th class="align-left">Action</th>	
					<th class="align-left"></th>		
				</tr>
			</thead>
	





	    <div class="row">
        <div class="col-md-6">
            <form action="/test" method="POST">
                {{ csrf_field()  }}
               <br>
                  <div class="form-group">
                    <label for="id">Select:</label>
                    <select name="candidate_list" id="candidate_list" class="select2 form-control padd_only_min">
                    <option value="">-- Select --</option>
                    @if($ticket)
                        @foreach($ticket as $some)
                            <option value="">
                                {{ $some->name  }} 
                                {{ $some->category }}   
								{{ $some->type }}                                                               
                            </option>
                        @endforeach
                    @endif
                </select>
                </div>
		        </div> 
		    </div>
		</div>   
