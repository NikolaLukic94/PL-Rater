<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() 
    {

    }

    public	$home_type = array(
		  "1" => "dwelling",
		  "2" => "condominium",  		  		  		  		  	  
		);

    public	$usage = array(
		  "1" => "primary",
		  "2" => "secondary",
		  "3" => "rental"  		  		  		  		  	  
		);

    public	$roof_type = array(
		  "1" => "gable",
		  "2" => "flat",
		  "3" => "shed"  		  		  		  		  	  
		);

    public	$roof_material = array(
		  "1" => "asphalt_shingle",
		  "2" => "metal",
		  "3" => "wood_shake",
		  "4" => "slate"	  		  		  		  	  
		);

    public	$roof_protections = array(
		  "1" => "shutters",
		  "2" => "plywood"		  		  		  		  	  
		);

    public	$default_limits = array(
		  "1" => "1000",
		  "2" => "5000",
		  "3" => "10000"  		  		  		  	  
		);

    public	$credit = array(
		  "1" => "0.7",
		  "2" => "0.8",
		  "3" => "0.85",	
		  "4" => "0.90",
		  "5" => "0.95",
		  "6" => "1",
		  "7" => "1.05",
		  "8" => "1.10",
		  "9" => "1.15"		  		  		  		  		  		  	  
		);

    public	$type_of_entity = array(
		  "1" => "individual",
		  "2" => "corporately_titled",  		  		  		  		  	  
		);

	public	$lob = array('1'=> 'HO3',
					'2' => 'DP1',
					'3' => 'DP3'
	    );

	public	$state = array('1' => 'LA',
					'2' => 'CA',
					'3' => 'FL'
	    );

	public	$med_pay = array('1' => '1000',
					'2' => '2500',
					'3' => '5000'
	    );

	public	$aop = array('1' => '1',
					'2' => '2',
					'3' => '3',
					'4'=> '5'
	    );


	public	$constr_type = array('1' => 'Frame',
					'2' => 'JM',
					'3' => 'MV',
					'4'=> 'MNC'
	    );

	public	$pc = array('1' => '1',
					'2' => '2',
					'3' => '3',
					'4'=> '4',
					'5' => '5'
	    );

	public	$yes_no = array(
		'1' => 'yes',
		'2' => 'no'			
	    );  

	public	$priority = array(
		'1' => 'low',
		'2' => 'medium',
		'3' => 'high'	
	    );  

	public	$ticket_groups = array(
		'1' => 'software',
		'2' => 'hardware'		
	    ); 

	public	$ticket_type = array(
		'1' => 'failure',
		'2' => 'request'
	    );

    public	$statuses = array(
		  "1" => "Pending",
		  "2" => "Questions to agent",
		  "3" => "Rated",	
		  "4" => "Quoted",
		  "5" => "Quoted - expired",
		  "6" => "Bound - pending",
		  "7" => "Binder Issued",
		  "8" => "Policy Issued",
		  "9" => "Endorsed",
		  "10" => "DNOC",
		  "11" => "Cancelled",
		  "12" => "Follow Up"
		);
}
