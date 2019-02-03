<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    public function dashboard() {

    	return view('/manage/dashboard');
    }

    public function indexUsers() {

    	$users = DB::table('users')->simplePaginate (2);

        return view('/manage/users/index', [
        	'users' => $users
        ]);
    }

    public function createUsers() {

        return view('/manage/users/create');
    }

}
