<?php

namespace App\Http\Controllers;

use App\Models\User;

class FollowController extends Controller
{
    public function store(User $user)
    {
        auth()
            ->user()
            ->toggleFollow($user);

        return back();
    }
}

