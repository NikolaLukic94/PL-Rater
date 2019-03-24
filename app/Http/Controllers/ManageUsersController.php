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

    	$users = DB::table('users')->simplePaginate(10);

        return view('/manage/users/index', [
        	'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('/manage/users/show', [
            'user' => $user
        ]);
    
    }

    public function edit($id)  {

        $user = User::findOrFail($id);

        return view('/manage/users/edit', compact('user'));
    }

    public function create() {
        
        $roles = Role::all();

        return view('/manage/users/create',[
            'roles' => $roles
        ]);
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
}
