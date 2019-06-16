<?php

namespace App\Http\Controllers;

use App\Stats;
use App\Submission;
use Illuminate\Http\Request;

class SubmissionStatsController extends Controller
{
    public function getCountNumber($attribute)
    {
        $subs = Submission::all();

        $all = [];
        $null = [];

        foreach ($subs as $sub) {
            array_push($all, $sub->$attribute);
        }
        $countNumber = [];

        foreach ($all as $key => $value) {
            if (empty($countNumber[$value])) {
                $countNumber[$value] = 1;
            } else {
                $countNumber[$value]++;
            }
        }

        return $countNumber;
    }

    /* Getting all subs results */
    public function index()
    {
        return view('/stats/subs', [
                'countPerAgency' => $this->getCountNumber('agency_name'),
                'countPerLob' => $this->getCountNumber('lob'),
                'countPerState' => $this->getCountNumber('location_address_state'),
                'countPerConstructionType' => $this->getCountNumber('construction_type'),
                'countPerProtectionClasses' => $this->getCountNumber('protection_class'),
            ]);
    }

}
