<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'articles' => $user
                ->articles()
                ->withLikes()
                ->paginate(10),
        ]);
    }

    public function edit()
    {
        return view('profiles.edit');
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'image' => ['string', 'nullable', 'max:255'],
            'username' => [
                'string',
                'required',
                'max:20',
                'alpha_dash',
                Rule::unique('users')->ignore(current_user()),
            ],
            'bio' => ['string', 'nullable'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore(current_user()),
            ],
            'password' => [
                'string',
                'nullable',
                'min:8',
                'max:255',
            ],
        ]);

        if ($attributes['password']) {
            $attributes['password'] = Hash::make($attributes['password']);
        } else {
            $attributes['password'] = current_user()->password;
        }

        current_user()->update($attributes);

        return redirect(current_user()->path());
    }
}
