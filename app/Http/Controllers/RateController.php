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
}
