<?php

namespace App\Http\Controllers;

use App\File;
use App\Submission;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/file/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $submission = Submission::findOrFail($id); 
               
        return view('file/create', compact('file','candidates','submission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $file = new File;

            File::create([

            'named_insured' =>  request('named_insured'),
            'additional_named_insured' =>  request('additional_named_insured'),
            'type_of_entity' =>  request('type_of_entity'),
            'ssn' => request('ssn'),
            'mailing_address_street_name_and_number' => request('mailing_address_street_name_and_number'),
            'mailing_address_city' => request('mailing_address_city'),
            'mailing_address_county' => request('mailing_address_county'),
            'mailing_address_state'=>request('mailing_address_state'),
            'location_address_street_name_and_number' => request('location_address_street_name_and_number'),
            'location_address_city' => request('location_address_city'),
            'location_address_county' => request('location_address_county'),
            'location_address_state'=>request('location_address_state'),
                      ]);                                                                                    
            $file->save();

            return view('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }

    public function searchView() {
        return view('/file/search');
    }


    public function searchResultWithSearchMask() {
        return view('/file/search_with_results');
    }
}
