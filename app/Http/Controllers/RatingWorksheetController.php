<?php

namespace App\Http\Controllers;

use App\Premium;
use App\RatingWorksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\LogActivity;

class RatingWorksheetController extends Controller
{
    public function index($id)
    {
        return view('/rating_worksheet/index',[
            'rw' => RatingWorksheet::findOrFail($id)
        ]);
    }

    public function store($file_id, $rater_id)
    {
        $premium = Premium::where('file_id', $file_id)->first();
        $id = $premium->id;

        RatingWorksheet::create([
            'file_id' => $file_id,
            'rater_id' => $rater_id,
            'premium_id' => $id
        ]);                                                                                      

        return redirect('/file/show/'. $file_id);
    }

    public function show($id)
    {        
        return view('rating_worksheet/show',[
            'rw' => RatingWorksheet::getRwJoinPremiumFileRater()
        ]);        
    }
}
