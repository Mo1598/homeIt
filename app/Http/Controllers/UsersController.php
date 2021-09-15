<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class UsersController extends Controller
{
    public function show(User $user){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $profile = Profile::all();

        return view('users.users', compact('user', 'profile'));
    }
}
