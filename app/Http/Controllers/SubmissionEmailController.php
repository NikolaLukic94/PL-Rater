<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSubmission;

class SubmissionEmailController extends Controller
{
    public function index()
    {
        return view('/subs/index', [
            'submission' => Submission::where('status','!=','logged')->orderBy('location_address_state', 'asc')->paginate(10),
            'subsEffWithinNextWeek' => DB::table('submissions')
                                    ->where('effective_date', '<', $dateInSevenDays = Submission::currentWeek())
                                    ->count(),
      ]);
    }

    public function create()
    {
        return view('subs/create', [
          'state' => $this->state,
          'lob' => $this->lob,
          'med_pay' => $this->med_pay,
          'aop' => $this->aop,
          'constr_type' => $this->constr_type,
          'pc' => $this->pc,
          'yes_no' => $this->yes_no,
        ]);
    }

    public function store(StoreSubmission $request)
    {
        $submission = Submission::createFromRequest($request);

        dispatch(new \App\Jobs\SendSubmissionSuccessfullEmail($submission->agent_email_address, $submission));

        return view('/subs/success');
    }

    public function show($id)
    {
        return view('/subs/show', [
            'submission' => Submission::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('/subs/edit', [
          'submission' => Submission::findOrFail($id),
          'state' => $this->state,
          'lob' => $this->lob,
          'med_pay' => $this->med_pay,
          'aop' => $this->aop,
          'constr_type' => $this->constr_type,
          'pc' => $this->pc,
          'yes_no' => $this->yes_no,
        ]);
    }

    public function update(Request $request, $id)
    {
        Submission::updateFromRequest($request, $id);

        return view('subs/change/success');
    }

    public function destroy($id)
    {
        $submission = Submission::find($id);

        $submission->delete();

        return redirect('/subs/emails/index');
    }
}
