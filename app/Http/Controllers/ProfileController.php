<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'articles' => $user
                ->articles()
                ->paginate(10),
        ]);
    }
}