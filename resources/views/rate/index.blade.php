@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your rates:</div>

                <div class="card-body">
                    	@if($rate)
							@foreach($rate as $r)
								<tr>
									<td>
										{{ $r->lob }}
									</td>
								</tr>
							@endforeach
								<p>You currently don have any!</p>
						@endif	
                </div>
                <button type="button" class="btn btn-outline-secondary">Add new</button>
            </div>
        </div>
    </div>
</div>
@endsection
