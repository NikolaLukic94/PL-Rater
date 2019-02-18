<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageFormRequest;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/folder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file/create');
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

            Submission::create([

            'named_insured' =>  request('named_insured'),
            'additional_named_insured' =>  request('additional_named_insured'),
            'type_of_entity' =>  request('type_of_entity'),
            'ssn' => request('ssn'),
            'mailing_address' => request('mailing_address'),
            'street_name_and_number' => request('street_name_and_number'),
            'city' => request('city'),
            'county' => request('county'),
            'state'=>request('state'),

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
    public function uploadImg(ImageFormRequest $request) {
        //this should be option for UW to add some img as a note/reminder, not tied to any sub or account.
        if ($request->hasFile('image')) {
        
            $file = $request->file('image');
        
            $name = $file->getClientOriginalName();
        
            $file->move(public_path() . '/images/', $name);
        
            $imagePath = public_path().'/images/'.$name;

           // $image = Image::make($imagePath)->resize(1000, 250)->save();

            return redirect('/')->with('status', 'Your image has been uploaded successfully!');
        
        }
    }    
}


