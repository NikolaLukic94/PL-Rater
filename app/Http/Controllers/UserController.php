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
        $users = $this->setDepartment($users);
        dd($users);
        $usersUnderTwentyFive = $users['underTwenty']['count'];


        return view('/users/list', [
            'users' => $users
        ]);

    }

    public function groupAndCountBasedOnAge($users)  {
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

/*
    public function test(Users $users)
    {
        $subtypesArray = [];

        $assetType = null;

        $assetSubType = DB::table('assets')
            ->leftJoin('asset_subtypes'), function ($join) {
                $join->on('asset_subtype_items.asset_subtype_id','=','asset_subtypes.id')
            ->leftJoin('asset_types'), function ($join) {
                $join->on('asset_subtypes.asset_subtype_id','=','asset_types.id')
            }
            }->select('asset_subype.id as asset_subtype_id',
                      'asset_subtypes.name as asset_subtype',
                      'asset_types.id as asset_type_id,
                      'asset_types.name as asset_type'
                        )
            ->where('asset_id','=','$asset->id')                        
    }    
            foreach($asset_subtypes as $as) {
                $asset_type_id = $as->asset_type_id;
                $asset_type = $as->asset_type;

                $subtypesArray[$as->asset_subtype_id] = $as->asset_subtype;

            }
            $asset->subtypes = $subtypesArray;
            $asset->type_id = $asset_type_id;
            $asset->type = $asset_type;
}
$assets = $this->test($assets);


*/
    public function setDepartment($users)
    {
        $departmentArray = [];

        $users = DB::table('users')
        ->leftJoin('assignments','assignments.user_id','=','users.id')
        ->leftJoin('departments','assignments.department_id','=','department.id')
            ->select('assignments.id as assignments',
                     'assignments.name as assignment_name',
                     'departments.id as dept_id',
                     'departments.name as depts',
                     'users.id as user_id',
                     'users.name as user_name'
                    )
            ->where('user_id','=',$users->id)
            ->get();

        foreach($users as $user) {
                $assignments = $user->assignments;
                $dept_id = $user->dept_id;

                $departmentArray[$user->assignments] = $as->assignment_name;

            }
            $users->subtypes = $departmentArray;
            $users->dept_id = $dept_id;
        }
    }