<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileGeneralInfoController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $file = File::updateGeneralInfo($request, $id);

        return view('/file/index', [
          'file' => $file,
        ]);
    }
}
