<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApprovalController extends Controller
{
    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('auth/users/approval/index', compact('users'));
    }

    public function create($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }
}
