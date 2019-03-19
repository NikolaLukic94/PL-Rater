<?php

namespace App\Http\Controllers;

use App\File;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\SubmissionSubmitted;
use App\LogActivity;

class FileGeneralInfoController extends Controller
{

    public function __invoke(Request $request, $id)
    {
        $file = File::findOrFail($id);

        $file->named_insured =    $request->named_insured;
        $file->entity_type =     $request->entity_type;   
        $file->ssn =  $request->ssn;
        $file->additional_ni =      $request->additional_ni;
        $file->mailing_address_street_name_and_number =      $request->mailing_address_street_name_and_number;
        $file->mailing_address_city =      $request->mailing_address_city;
        $file->mailing_address_county =      $request->mailing_address_county;
        $file->mailing_address_zip =      $request->mailing_address_zip;
        $file->mailing_address_state =      $request->mailing_address_state;
        $file->location_address_street_name_and_number =      $request->location_address_street_name_and_number;
        $file->location_address_city =      $request->location_address_city;
        $file->location_address_county =      $request->location_address_county;
        $file->location_address_zip =      $request->location_address_zip;
        $file->location_address_state =      $request->location_address_state;                                                                 
        $file->save();

        LogActivity::addToLog('file update general char ' . $file->id . $file->named_insured);          
        return view('/file/index',[
          'file' => $file
        ]);
    }

}
