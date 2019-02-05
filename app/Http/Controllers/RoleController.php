<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function indexUsers() {

    	$reoles = DB::table('roles')->simplePaginate(2);

        return view('/manage/roles/index', [
        	'roles' => $roles
        ]);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('/manage/role/show', [
            'role' => $role
        ]);
    
    }

    public function edit($id)  {

        $role = Role::findOrFail($id);

        return view('/manage/roles/edit', compact('role'));
    }

    public function create() {

        return view('/manage/role/create');
    }

    public function store(Request $request) {

    	return redirect('/manage/roles/index');
    }
}
