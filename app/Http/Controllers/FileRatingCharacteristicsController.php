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

class FileRatingCharacteristicsController extends Controller
{

    public function __invoke(Request $request, $id)
    {
        $file = File::findOrFail($id);

        $file->lob =    $request->lob;
        $file->cov_a =     $request->cov_a;   
        $file->other_structures =  $request->other_structures;
        $file->med_pay =      $request->med_pay;
        $file->aop_ded =      $request->aop_ded;
        $file->construction_type =      $request->construction_type;
        $file->protection_class =      $request->protection_class;
        $file->new_purchase =      $request->new_purchase;
        $file->prior_carrier =      $request->prior_carrier;
        $file->prior_carrier_name =      $request->prior_carrier_name;

        $file->save();

        return redirect('/file/index/{{$file->id}}');
    }

}
