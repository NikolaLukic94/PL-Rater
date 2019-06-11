<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileRatingCharacteristicsController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        File::updateFileRatingCharacteristics($request, $id);

        return redirect('/file/index/'.$id);
    }
}
