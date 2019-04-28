<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserApprovalController extends Controller
{
    public function index()
    {
        $users = User::whereNotNull('approved_at')->get();
        $users_pending_approval = User::whereNull('approved_at')->get();

        return view('auth/users/approval/index',[
            'users' => $users,
            'users_pending_approval' => $users_pending_approval
        ]);
    }

    public function create($user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }



    public function destroy($id) {

        $user = User::find($id);
        
        $user->update(['approved_at' => null]);

        return redirect()->route('admin.users.index')->withMessage('This User is no longer approved');
        
    }

}
