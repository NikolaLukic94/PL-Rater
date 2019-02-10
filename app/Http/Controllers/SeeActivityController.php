<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeeActivityController extends Controller
{
	public function index() {

		//$object = DB::table('files')
		//		->left_join('subs');

		return view('/log/index',[
			'actity' => $actity
		]);
	}
}
