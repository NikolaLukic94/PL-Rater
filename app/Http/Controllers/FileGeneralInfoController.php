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
        $file = File::updateGeneralInfo($request, $id);
          
        return view('/file/index',[
          'file' => $file
        ]);
    }

}
