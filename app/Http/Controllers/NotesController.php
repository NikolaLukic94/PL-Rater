<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use App\File;
use Auth;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $notes = DB::table('notes')->where('file_id', $id)->simplePaginate(5);

        return view('/notes/index',[
                'notes' => $notes
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $file = DB::table('files')->where('id', $id)->first();

        return view('/notes/create',[            
            'file' => $file
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $user = auth()->user();

        Notes::create([
            'title' => $request->title,
            'text' => $request->text,
            'created_by' => $user->id,
            'file_id' => $id
        ]);

        return redirect('notes/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //only superadmin
        $notes = Notes::find($id);
        
        $notes->delete();

        return redirect('/notes');
    }
}
