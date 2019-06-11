<?php

namespace App\Http\Controllers;

use App\Form;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('/forms/index', [
            'forms' => Form::paginate(10),
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

        return view('/forms/show', [
            'forms' => Form::paginate(10),
        ]);
    }

    public function destroy($id)
    {
        $form = Form::find($id);

        $form->delete();

        return redirect('/forms/index');
    }
}
