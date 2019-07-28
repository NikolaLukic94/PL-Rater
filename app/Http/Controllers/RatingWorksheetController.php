<?php

namespace App\Http\Controllers;
use App\Rater;
use App\Premium;
use App\RatingWorksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingWorksheetController extends Controller
{
    public function index($id)
    {
        return view('/rating_worksheet/index', [
            'rw' => RatingWorksheet::findOrFail($id),
        ]);
    }

    public function store($file_id, $rater_id)
    {
        $id = Premium::where('file_id', $file_id)->first()->id;

        $newRw = RatingWorksheet::create([
            'file_id' => $file_id,
            'rater_id' => $rater_id,
            'premium_id' => $id,
        ]);

        return redirect('/rating-worksheet/show/'. $newRw->id);
    }

    public function show($id)
    {
        return view('rating_worksheet/show', [
            'rw' => RatingWorksheet::getRwJoinPremiumFileRater($id)
        ]);
    }

}
