<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileStatus extends Controller
{
    public function __invoke(Request $request, $id)
    {
        File::updateFileStatus($request, $id);

        return redirect('/file/index/'. $id);
    }
}
