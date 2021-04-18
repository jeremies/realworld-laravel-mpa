<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->hasArticles(5)->create();

        $john = User::find(1);
        $john->username = 'john';
        $john->email = 'john@example.com';
        $john->image = 'https://upload.wikimedia.org/wikipedia/commons/b/b1/WazeSummer1.png';
        $john->save();

        $user2 = User::find(2);
        $user3 = User::find(3);
        $john->follow($user2);
        $john->follow($user3);

        $johnArticles = $john->articles;
        $johnArticles->get(0)->like($user2);
        $johnArticles->get(0)->like($user3);
    }
}
