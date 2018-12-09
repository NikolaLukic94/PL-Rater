<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class TicketController extends Controller
{

    public function index(Request $request) {

            $search_high_priority = null;
            $search_low_priority = null;

        if($request->isMethod('post')){

        	if ($request->has('high')) {
    			$search_high_priority = Input::get('high');
			}

        	if ($request->has('low')) {
        			$search_low_priority = Input::get('low');
			}

            $search_ticket_name =    $request->ticket_name;
            $search_ticket_category =     $request->ticket_category;
            $search_ticket_type =         $request->ticket_type;
            $search_from_date =      $request->search_from_date;
            $search_to_date =      $request->search_to_date;

            $ticket = DB::table('tickets')
			            ->leftJoin('ticket_categories', 'tickets.id', '=', 'ticket_categories.id')
			            ->leftJoin('ticket_types', 'tickets.id', '=', 'ticket_types.type_id')
			            ->select('ticket_categories.name as category',
			            		 'ticket_types.name as type',
			            		 'tickets.name as name')
                        ->when($search_ticket_name, function ($query) use ($search_ticket_name) {
                            return $query->where('name', 'like', '%' . $search_ticket_name . '%');
                        })
                        ->when($search_ticket_category, function ($query) use ($search_ticket_category) {
                            return $query->where('ticket_category', 'like', '%' . $search_ticket_category . '%');
                        })
                        ->when($search_ticket_type, function ($query) use ($search_ticket_type) {
                            return $query->where('ticket_type', $search_ticket_type);
                        }) /*
                        ->when($search_from_date, function ($query) use ($search_from_date,$search_to_date,) {
                           return $query->whereBetween('created_at', array($search_from_date, $search_to_date)); 
                        })*/
                        ->orderBy('name', 'asc')
                        ->get();                     

                        Session::flash('inputs', [
                            'search_high_priority' => $search_high_priority,
                            'search_low_priority' => $search_low_priority,
                            'search_ticket_name' => $search_ticket_name,
                            'search_ticket_category' => $search_ticket_category,
                            'search_ticket_type' => $search_ticket_type,
                            'search_from_date' => $search_from_date,
                            'search_to_date' => $search_to_date

                            ]);
                    }else{
                         Session::forget('inputs');

            $ticket = DB::table('tickets')
			            ->leftJoin('ticket_categories', 'tickets.id', '=', 'ticket_categories.id')
			            ->leftJoin('ticket_types', 'tickets.id', '=', 'ticket_types.id')
			            ->select('ticket_categories.name as category',
			            		 'ticket_types.name as type',
			            		 'tickets.name as name')->get();

						return view('/tickets', [
				            'ticket' => $ticket,
				        ]);


}}
}
