<?php

namespace App\Http\Controllers;

//used for sending out rating worksheets as an email attachement
class RwEmailController extends Controller
{	//rw id

    public function __invoke($id)
    {
        $rw = RatingWorksheet::findOrFail($id);

        dispatch(new \App\Jobs\SendRwEmail($rw->named_insured, $rw));        
    }
}
