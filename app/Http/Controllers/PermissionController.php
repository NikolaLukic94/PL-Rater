<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function indexUsers() {

    	$permissions  = DB::table('permissions')->simplePaginate(2);

        return view('/manage/premissions/index', [
        	'permissions' => $permissions
        ]);
    }

    public function show($id)
    {
        $permission = Permision::findOrFail($id);

        return view('/manage/permission/show', [
            'permission' => $permission
        ]);
    
    }

    public function edit($id)  {

        $permission = Permission::findOrFail($id);

        return view('/manage/permissions/edit', compact('permission'));
    }

    public function create() {

        return view('/manage/permissions/create');
    }

    public function store(Request $request) {

    	return redirect('/manage/permissions/index');
    }
}
