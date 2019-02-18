@extends('layout')

<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<form class="search-form search-form-basic" action="/tickets" method="post">
		{{ csrf_field() }}
			<div class="form-row">				
				<div class="col-md-4 form-group">
					<label for="ticket_group">Ticket group:</label>
					<input type="text" name="ticket_group" id="ticket_group" class="form-control" @if(isset(Session::get('inputs')['ticket_name'])) value="{{ Session::get('inputs')['ticket_group'] }}" @endif>
				</div> 
				<div class="col-md-4 form-group">
					<label for="ticket_category">Ticket category:</label>
					<input type="text" name="ticket_category" id="ticket_category" class="form-control" @if(isset(Session::get('inputs')['ticket_category'])) value="{{ Session::get('inputs')['ticket_category'] }}" @endif>
				</div> 
				<div class="col-md-4 form-group">
					<label for="ticket_type">Ticket type:</label>
						<select name="ticket_type" class="col-md-4 form-group">
					  	  <option  value="">-- -- </option>
						  	  @if($ticket_type)
						  	  	@for($i = 1; $i <= count($ticket_type); $i++)		
							 		<option value="{{$i}}">{{$ticket_type[$i]}}</option>
							 	@endfor	 
							  @endif							  
						 </select>
				</div>  
				<br>
				<div class="col-md-4 form-group">
					<label for="ticket_priority">Ticket priority:</label>
						<select name="ticket_priority" class="col-md-4 form-group">
					  	  <option  value="">-- -- </option>
						  	  @if($priority)
						  	  	@for($i = 1; $i <= count($priority); $i++)		
							 		<option value="{{$i}}">{{$priority[$i]}}</option>
							 	@endfor	 
							  @endif							  
						 </select>
				</div> 
            
				<input type="radio" name="high" value="urgent"/>&nbsp;
				<input type="radio" name="low" value="not urgent"/>&nbsp;

				<div class="col-md-4 form-group">
					<label for="search_from_date">From:</label>
					<input type="date" name="search_from_date" id="search_from_date" class="form-control" 
					 @if(isset(Session::get('inputs')['search_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
				</div>  <br>
				<div class="col-md-4 form-group">
					<label for="search_to_date">To:</label>
					<input type="date" name="search_to_date" id="search_to_date" class="form-control" 
					 @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_to_date'] }}" @endif>
				</div> 	
			</div>     
			<hr>
			<div class="form-row">
				<div class="col-md-12 col-lg-12">
					<button type="submit" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
					<a href="/users" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
				</div>
			</div>
			<hr>
		</form>
	</div>
		<table class="table data-table">
			<h1>Tickets</h1>
			<thead>
				<tr>
					<th class="align-left">Category</th>
					<th class="align-left">Title</th>
					<th class="align-left">Priority</th>
					<th class="align-left">Sent on</th>					
				</tr>
			</thead>
				@if($ticket)
					@foreach($ticket as $t)
						<tr>
							<td>
								{{ $t->name }}
							</td>
							<td>
								{{ $t->category }}
							</td>
							<td>
								{{ $t->type }}
							</td>
							<td>
								{{ $t->Priority }}
							</td>	
							<td>
								{{ $t->date }}
							</td>														
						</tr>
					@endforeach
				@endif
 
