<?php

namespace App\Http\Controllers;

use App\User;

class UserApprovalController extends Controller
{
    public function index()
    {
        return view('auth/users/approval/index', [
            'users' => User::where('name', '!=', 'Admin')->whereNotNull('approved_at')->paginate(10),
            'users_pending_approval' => User::whereNull('approved_at')->paginate(10),
        ]);
    }

    public function create($user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->update(['approved_at' => null]);

        return redirect()->route('admin.users.index')->withMessage('This User is no longer approved');
    }
}
