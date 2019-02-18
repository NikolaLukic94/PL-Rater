<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

//use ConsoleTVs\Charts\Facades\Charts;
use App\Charts\TicketWhereTypeHardware;
use App\Charts\SampleChart;
use App\TType;
use App\User;
use Charts;

class TicketController extends Controller
{
    public function index(Request $request) {

        /*
        $ticket = Ticket::find(1);
        $myDate = '1995-07-02';
        $years = \Carbon::parse($myDate)->age;
        dd($years);
        */

        // calculating ticket values
        $max_ticket = DB::table('tickets')->max('id');
        $max_ticket = DB::table('tickets')->sum('id');        
        // end


        // search functionality
        $search_high_priority = null;
        $search_low_priority = null;

        if($request->isMethod('post')){

        	if ($request->has('high')) {
    			$search_high_priority = Input::get('high');
			}

        	if ($request->has('low')) {
        			$search_low_priority = Input::get('low');
			}

            $search_ticket_group = $request->search_ticket_group;
            $search_ticket_employee = $request->search_ticket_employee;     
            $search_ticket_status = $request->search_ticket_status;             
            $search_ticket_category =     $request->ticket_category;
            $search_ticket_type =         $request->ticket_type;
            $search_from_date =      $request->search_from_date;
            $search_to_date =      $request->search_to_date;

            $ticket = DB::table('tickets')/*
            ->leftJoin('ticket_group', 'tickets.group_id', '=', 'ticket_groupes.id')   
            ->leftJoin('employee', 'tickets.employee_id', '=', 'users.id')                      
            ->leftJoin('ticket_categories', 'tickets.category_id', '=', 'ticket_categories.id')
            ->leftJoin('ticket_types', 'tickets.type_id', '=', 'ticket_types.id')
            ->leftJoin('ticket_statuses', 'tickets.status_id', '=', 'ticket_statuses.id')            
            ->leftJoin('ticket_priorities', 'tickets.priorities_id', '=', 'ticket_priorities.id')
			            ->select('ticket_categories.name as category',
			            		 'ticket_types.name as type',
			            		 'ticket_priorities.name as Priority'
			            		 )
                        ->when($search_ticket_group, function ($query) use ($search_ticket_group) {
                            return $query->where('ticket_group_id', 'like', '%' . $search_ticket_group . '%');
                        })    
                        ->when($search_ticket_employee, function ($query) use ($search_ticket_employee) {
                            return $query->where('employee_id', 'like', '%' . $search_ticket_employee . '%');
                        })                                              
                        ->when($search_ticket_category, function ($query) use ($search_ticket_category) {
                            return $query->where('ticket_category_id', 'like', '%' . $search_ticket_category . '%');
                        })
                        ->when($search_ticket_status, function ($query) use ($search_ticket_status) {
                            return $query->where('ticket_status_id', 'like', '%' . $search_ticket_status . '%');
                        })*                     
                        ->when($search_from_date, $search_to_date function ($query) use ($search_from_date,$search_to_date) {
                           return $query->where('created_at','>=',date('Y-m-d H:i:s', srtotime($search_from_date))
                                        ->where('created_at','<=',date('Y-m-d H:i:s', srtotime($search_to_date))
                        })     */                   
                    /*    ->when($search_ticket_type, function ($query) use ($search_ticket_type) {
                            return $query->where('ticket_type_id', $search_ticket_type);
                        })*/
                        ->orderBy('name', 'asc')
                        ->get();                     

                        Session::flash('inputs', [
                            'search_high_priority' => $search_high_priority,
                            'search_low_priority' => $search_low_priority,
                            'search_ticket_group' => $search_ticket_group,
                            'search_ticket_category' => $search_ticket_category,
                            'search_ticket_type' => $search_ticket_type,
                            'search_from_date' => $search_from_date,
                            'search_to_date' => $search_to_date

                            ]);
                    }else{
                         Session::forget('inputs');

            $ticket = DB::table('tickets')
                ->leftJoin('ticket_categories', 'tickets.category_id', '=', 'ticket_categories.id')
                ->leftJoin('ticket_types', 'tickets.type_id', '=', 'ticket_types.id')
                ->leftJoin('ticket_priorities', 'tickets.priority_id', '=', 'ticket_priorities.id')
                            ->select('ticket_categories.name as category',
                                     'ticket_types.name as type',
                                     'ticket_priorities.name as priority',
                                     'tickets.name as name',
                                     'tickets.created_at as date'
                                     )
                            ->get();
     
		return view('/tickets', [
			'ticket' => $ticket,
            'max_ticket' => $max_ticket,
            'priority' => $this->priority,
            'ticket_type' => $this->ticket_type
		]);

 
					}}
}
