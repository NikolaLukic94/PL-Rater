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
    public function store(ImageFormRequest $request) {
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


