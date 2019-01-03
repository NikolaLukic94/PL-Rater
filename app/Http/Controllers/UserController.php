<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groupByCarrier($users) {

        $users = DB::table('users')
            ->leftJoin('carriers', 'users.carrier_id', '=', 'carriers.id')  
            ->select('carriers.name as carrier_name',
                     'users.name as user_name',
                     'user.email as user_email'
                     )
            ->get();

        $carrier_grouping_category = DB::table('carriers')->get();

        
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* COUNTING USERS AND GROUPING THEM */

    public function index() {

    $users = DB::table('users')->get();
    $users = $this->groupAndCountBasedOnAge($users);
    dd($users);
    $usersUnderTwentyFive = $users['underTwenty']['count'];


    return view('/users/list', [
        'users' => $users
    ]);
}

public function groupAndCountBasedOnAge($users)
{
    list($under, $equalOrAbove) = collect($users)->partition(function ($user) {
        return Carbon::now()
                ->diffInYears(Carbon::createFromFormat('Y-m-d', $user->bith_date)) < 25;
    });

    return [
        'underTwenty'  => [
            'users' => $under->all(),
            'count' => $under->count()
        ],

        'equalOrAboveTwenty' => [
            'users' => $equalOrAbove->all(),
            'count' => $equalOrAbove->count()
        ]
    ];
    

} 



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
