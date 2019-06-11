<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

/* USED FOR DEFINING, EDITING AND DELETING RATE COEFICIENTS  */

class RateController extends Controller
{
    public function index()
    {
        return view('/rate/index', [
            'rate' => Rate::all(),
        ]);
    }

    public function create()
    {
        return view('/rate/define', [
            'credit' => $this->credit,
            'lob' => $this->lob,
        ]);
    }

    public function store(Request $request)
    {
        Rate::createFromRequest($request);

        return redirect('/rate/index');
    }

    public function show($id)
    {
        return view('/rate/show', [
            'rate' => Rate::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('/rate/edit', [
            'rate' => Rate::findOrFail($id),
            'credit' => $this->credit,
        ]);
    }

    public function destroy($id)
    {
        $this->authorize('update', $id);

        $rate = Rate::find($id);

        $rate->delete();

        return redirect('/rate/index');
    }

    public function rate($id)
    {
        return view('/rate/prepare');
    }
}
