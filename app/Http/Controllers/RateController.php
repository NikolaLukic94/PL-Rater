<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

/*

        if($submission->lob == "HO-3"){
            $lobRate == 1;
        }
        else if ($submission->lob == "DP-1"){
            $lobRate == 1.05;
        }
        else if ($submission->lob == "DP-3"){
            $lobRate == 1.10;
        }



        if($submission->construction_type == "Frame"){
            $pcRate == 0.85
        }
        else if ($submission->protection class == "JM"){
            $pcRate == 0.90
        }
        else if ($submission->protection class == "MV"){
            $pcRate == 0.95
        }
        else if ($submission->protection class == "MNC"){
            $pcRate == 1.05
        }




        if($submission->protection class == 1){
            $pcRate == 0.80
        }
        else if ($submission->protection class == 2){
            $pcRate == 0.85
        }
        else if ($submission->protection class == 3){
            $pcRate == 0.90
        }
        else if ($submission->protection class == 4){
            $pcRate == 0.95
        }
        else if ($submission->protection class == 5){
            $pcRate == 1
        }
        else if ($submission->protection class == 6){
            $pcRate == 1.3
        }
        else if ($submission->protection class == 7){
            $pcRate == 1.7
        }
        else if ($submission->protection class == 8){
            $pcRate == 2.3
        }
        else if ($submission->protection class == 9){
            $pcRate == 2.7
        }     


        if($request->construction_type == "Frame"){
            $pcRate == 0.85
        }
        else if ($request->protection class == "JM"){
            $pcRate == 0.90
        }
        else if ($request->protection class == "MV"){
            $pcRate == 0.95
        }
        else if ($request->protection class == "MNC"){
            $pcRate == 1.05
        }
                            
        */

        $rate = DB::table('rates')->get();

        return view('/rate/index',[
            'rate' => $rate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/rate/define');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rate = new Rate;

        Rate::create([
            'lob' => request('lob'),
            'county' => request('county'),
            'state'=>request('state'),
            'cov_a' => request('cov_a'),    
            'other_structures' => request('other_structures'),
            'loss_of_use' => request('loss_of_use'),
            'med_pay' => request('agent_phone_number'),
            'aop_ded' => request('aop_ded'),
            'construction_type' => request('construction_type'),
            'protection_class' => request('protection_class'),
            'new_purchase' => request('new_purchase'),    
            'prior_carrier' => request('prior_carrier'),
            'prior_carrier_name' => request('prior_carrier_name'),
            'prior_carrier_effective_date' => request('prior_carrier_effective_date')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        //
    }

    public function rate($id)
    {
        return view('/rate/prepare');
    }


}
