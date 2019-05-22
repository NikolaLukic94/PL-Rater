<?php

namespace App\Http\Controllers;

use App\FormAttachment;
use Illuminate\Http\Request;
use App\Form;

class FormAttachmentController extends Controller
{
    public function show($id)
    {
        $form = Form::find($id);

        $ppath = 'app\public\forms\\';
        
        return response()->download(storage_path($ppath.$form->attachment));
        
        return back();
    }

}
