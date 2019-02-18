<?php

namespace App\Http\Controllers;

use App\RatingWorksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class RatingWorksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($file_id, $rater_id)
    {

        $premium = DB::table('raters')->where('file_id', $file_id)->first();
        $id = $premium->id;

        RatingWorksheet::create([

        'file_id' => $file_id,
        'rater_id' => $rater_id,
        'premium_id' => $id

                  ]);   
                                                                                                   
        LogActivity::addToLog('added new rating worksheet' );

        return view('/file/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RatingWorksheet  $ratingWorksheet
     * @return \Illuminate\Http\Response
     */
    public function show(RatingWorksheet $ratingWorksheet)
    {
        //
    }

}
