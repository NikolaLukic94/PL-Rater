<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\File;
use App\LogActivity;

class QuoteController extends Controller
{
    public function create() {

    	$file = DB::table('files')->where('id',1)->first();
    	$rw = DB::table('rating_worksheets')->where('id',1)->first();

    	return view('/quoting/create',[
    		'file' => $file,
    		'rw' => $rw
    	]);

    }
}
