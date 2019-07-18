<?php

namespace App\Http\Controllers;

use App\File;
use App\Notes;
use App\Activity;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $search_named_insured = $request->search_named_insured;
            $search_lob = $request->search_lob;
            $search_effective_date = $request->search_effective_date;
            $search_agency_name = $request->search_agency_name;
            $search_agent_name = $request->search_agent_name;
            $search_state = Input::get('options');
            $search_from_date = $request->search_from_date;
            $search_to_date = $request->search_to_date;

            $files = DB::table('files')
                          ->when($search_named_insured, function ($query) use ($search_named_insured) {
                              return $query->where('named_insured', 'like', '%'.$search_named_insured.'%');
                          })
                          ->when($search_lob, function ($query) use ($search_lob) {
                              return $query->where('lob', $search_lob);
                          })
                          ->when($search_effective_date, function ($query) use ($search_effective_date) {
                              return $query->where('effective_date', $search_effective_date);
                          })
                          ->when($search_agency_name, function ($query) use ($search_agency_name) {
                              return $query->where('agency_name', $search_agency_name);
                          })
                          ->when($search_agent_name, function ($query) use ($search_agent_name) {
                              return $query->where('agent_name', $search_agent_name);
                          })
                          ->when($search_state, function ($query) use ($search_state) {
                              return $query->where('state', $search_state);
                          })
                          ->when($search_from_date, function ($query) use ($search_from_date) {
                              return $query->where('created_at', $search_from_date);
                          })
                          ->when($search_to_date, function ($query) use ($search_to_date) {
                              return $query->where('created_at', $search_to_date);
                          })
                          ->orderBy('named_insured', 'asc')
                          ->get();

            Session::flash('inputs', [
                              'search_named_insured' => $search_named_insured,
                              'search_lob' => $search_lob,
                              'search_effective_date' => $search_effective_date,
                              'search_agency_name' => $search_agency_name,
                              'search_agent_name' => $search_agent_name,
                              'search_state' => $search_state,
                              'search_from_date' => $search_from_date,
                              'search_to_date' => $search_to_date,
                              ]);

            return view('/file/search', [
                'files' => $files,
              ]);
        } else {
            return view('/file/search', [
                'files' => File::all(),
              ]);
        }
    }

    public function create($id)
    {
        return view('file/create', [
          'submission' => Submission::findOrFail($id),
          'state' => $this->state,
          'type_of_entity' => $this->type_of_entity,
        ]);
    }

    public function store(Request $request, $id)
    {
        File::createFromRequest($request, $id);

        return redirect('/file/index');
    }

    public function show($id)
    {
        $file = File::findOrFail($id)->first();
        $log_info = Activity::where('subject_type', "App\Submission" && 'subject_id', $file->submission_id)->orWhere('subject_type',"App\File" && 'subject_id', $file->id)->get();

        return view('/file/index', [
            'file' => $file,
            'rw' => File::getRWjoinFileRatePremium($id),
            'notes' => Notes::all(),
            'submission' => Submission::where('id', $file->submission_id)->first(),
            'log' => $log_info
        ]);
    }

}
