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


class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('/forms/index',[
            'forms' => Form::paginate(10)
        ]);
    }

    public function create()
    {
        return view('forms/create');

    }

    public function store(Request $request)
    {
        $fileNameToStore = Form::getFileNameToStore($request, 'attachment', 'forms');

        Form::createFromRequest($request, $fileNameToStore);
                                                                                                   
        return redirect('/forms/index');
    }

    public function show($id)
    {
        $forms = Form::all();

        return view('/forms/show',[
            'forms' => Form::paginate(10)
        ]);
    }
    
    public function destroy($id) {

        $form = Form::find($id);

        $form->delete();

        return redirect('/forms/index');
        
    }
}
