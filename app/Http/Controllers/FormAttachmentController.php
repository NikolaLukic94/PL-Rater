<?php

namespace App\Http\Controllers;

use App\FormAttachment;
use Illuminate\Http\Request;
use App\Form;

class FormAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormAttachment  $formAttachment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form::find($id);
        $ppath = 'app\public\forms\\';
        return response()->download(storage_path($ppath.$form->attachment));
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormAttachment  $formAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(FormAttachment $formAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormAttachment  $formAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAttachment $formAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormAttachment  $formAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAttachment $formAttachment)
    {
        //
    }
}
