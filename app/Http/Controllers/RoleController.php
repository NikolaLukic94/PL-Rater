<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index() {

    	$roles = DB::table('roles')->simplePaginate(2);

        return view('/manage/roles/index', [
        	'roles' => $roles
        ]);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('/manage/roles/show', [
            'role' => $role
        ]);
    
    }

    public function edit($id)  {

        $role = Role::findOrFail($id);

        return view('/manage/roles/edit', compact('role'));
    }

    public function create() {

        return view('/manage/roles/create');
    }

    public function store(Request $request) {

        Role::create([

            'name' => request('name'),
            'display_name' => request('display_name'),
            'description' => request('description'),

                  ]);                                                                                             

        return redirect('/manage/roles/index');
    }    


}
