<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Form;
use Illuminate\Support\Facades\Input;
use App\LogActivity;

class FormController extends Controller
{
    public function index(Request $request)
    {
        
        return view('/forms/index',[
            'forms' => Form::paginate(10)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileNameToStore = null;

        if($request->hasFile('attachment')){
        //get the filename with the extension    
            $filenameWithExt = $request->file('attachment')->getClientOriginalName();
        //get just filename    
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just extension
            $extension = $request->file('attachment')->getClientOriginalExtension();
        //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;    
        // upload file
            $path = $request->file('attachment')->storeAs('public/forms',$fileNameToStore);
        }

        Form::create([
            'name' => request('form_name'),
            'edition_date' => request('edition_date'),
            'text' => request('text'),
            'attachment' =>  $fileNameToStore
                  ]);   
                                                                                                   
        return redirect('/forms/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forms = Form::all();

        return view('/forms/show',[

        ]);
    }
    
    public function destroy($id) {

        $form = Form::find($id);

        $form->delete();

        return redirect('/forms/index');
        
    }
}
