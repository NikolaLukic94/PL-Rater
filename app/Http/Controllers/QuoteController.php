<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\File;
use App\Form;
use App\LogActivity;

class QuoteController extends Controller
{
    public function create() 
    {
    	return view('/quoting/create',[
    		'file' => File::where('id',1)->first(),
    		'rw' => RatingWorksheet::where('id',1)->first();
    		'forms' => Form::all()
    	]);

    }

    public function store($request, $id) 
    {
      Quote::createFromRequest($request, $id); 

      return redirect('/file/index');
    }
}
