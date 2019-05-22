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
        File::updateFileRatingCharacteristics($request, $id);

        return redirect('/file/index/' . $id);
    }

}
