<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeeActivityController extends Controller
{
	public function index() {

	    if($request->isMethod('post')){
		      $search_named_insured =    $request->search_named_insured;
		      $search_lob =         $request->search_lob;
		      $search_agency_name =      $request->search_agency_name;
		      $search_agent_name =      $request->search_agent_name;
		      $search_state =     Input::get('options');
		      $search_effective_date_from =      $request->search_effective_date_from;
		      $search_effective_date_to =      $request->search_effective_date_to;

		      $file = DB::table('files')
		              ->leftJoin('submissions', 'files.submission_id', '=', 'submissions.id')
		              ->select('submissions.named_insured as named_insured',
		                       'submissions.agent_name as agent_name',
		                       'submissions.lob as lob',
		                       'submissions.effective_date as effective_date',                       
		                       'submissions.agency as agency', 
		                       'submissions.state as state'
		                  ->when($search_named_insured, function ($query) use ($search_named_insured) {
		                      return $query->where('named_insured', 'like', '%' . $search_named_insured . '%');
		                  })
		                  ->when($search_lob, function ($query) use ($search_lob) {
		                      return $query->where('lob', $search_lob);
		                  })
		                  ->when($search_agency_name, function ($query) use ($search_agency_name) {
		                     return $query->where('agency_name', $search_agency_name);
		                  })
		                  ->when($search_agent_name, function ($query) use ($search_agent_name) {
		                     return $query->where('agent_name', $search_agent_name);
		                  })
		                  ->when($search_state, function ($query) use ($search_state) {
		                     return $query->where('state', $search_state);
		                  })                           
		                  ->when($search_effective_date_from, function ($query) use ($search_effective_date_from) {
		                     return $query->where('created_at', $search_effective_date_from);
		                  })
		                  ->when($search_effective_date_to, function ($query) use ($search_effective_date_to) {
		                     return $query->where('created_at', $search_effective_date_to);
		                  })
		                  ->orderBy('named_insured', 'asc')
		                  ->get());                    

		                Session::flash('inputs', [
		                      'search_named_insured' => $search_named_insured,
		                      'search_lob' => $search_lob,
		                      'search_effective_date_from' => $search_effective_date_from,		 		      
		                      'search_effective_date_to' => $search_effective_date_to,                     
		                      'search_agency_name' => $search_agency_name,
		                      'search_agent_name' => $search_agent_name,
		                      'search_state' => $search_state,
		                      'search_from_date' => $search_from_date,                           
		                      'search_to_date' => $search_to_date,
		                      ]);
		                            
		                    }else{
		                         Session::forget('inputs');

		return view('/log/index',[
			'actity' => $actity
		]);
	}
}
