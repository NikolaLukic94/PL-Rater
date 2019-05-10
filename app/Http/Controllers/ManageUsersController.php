<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hash;

class ManageUsersController extends Controller
{
	public function index() {

        return view('/manage/users/index', [
        	'users' => User::simplePaginate(10)
        ]);
    }

    public function show($id)
    {
        return view('/manage/users/show', [
            'user' => User::findOrFail($id)
        ]);
    
    }

    public function edit($id)  {

        return view('/manage/users/edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function create() {
    
        return view('/manage/users/create');
    }

    public function store(Request $request) {

    	$this->validate($request,[
    		'name' => 'required|max:100',
    		'email' => 'required|unique:users|email' 
    	]);
/*
		if (Request::has('password') && !empty($request->password)) {
			$password = trim($request->password);
		} else {  //set the manual password
			$length = 10;
			$keyspace = '123456789abcdefghijkmnopqrstuvwyzyABCDEFGHIJKLMNPQRSTUVWXZY';
			$str = '';
			$max = mb_strlen($keyspace, '8bit') - 1;
			for ( $i=0; $i < $length; ++$i;) {
				$str .= $keyspace[random_int(0,$max)];
			} 
			$user->password = Hash::make($str);

	    	$user = new User();
	    	$user->name = $request->name;
	    	$user->email = $request->email;
	    	$user->password = Hash::make($password);
	    	$user->save();

	        if ($user->save()) {
	        	return redirect()->route('/manage/users/show', $user->id);
	        } else {
	        	Session::flash('danger','Sorry a problem occured while creating this user');
	        	return view('/manage/users/create')
	        }*/
    }

    public function destroy($id) {

        $user = User::find($id);

        $user->delete();

        return back();
    }

}
