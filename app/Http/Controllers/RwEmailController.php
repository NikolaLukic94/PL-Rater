<?php

namespace App\Http\Controllers;

//used for sending out rating worksheets as an email attachement
class RwEmailController extends Controller
{	//rw id

    public function __invoke($id)
    {
        $rw = RatingWorksheet::findOrFail($id);
    }
}
