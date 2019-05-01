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
    public function index($id)
    {
        return view('/notes/index',[
                'notes' => File::where('file_id', $id)->notes()->simplePaginate(5)
            ]);
    }

    public function create($id)
    {   
        return view('/notes/create',[            
            'file' => File::where('id', $id)->first()
        ]);        
    }

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
    {   
        $notes = Notes::find($id);
        
        $notes->delete();

        return redirect('/notes');
    }
}
