<?php

namespace Database\Seeders;

use App\Models\Post;
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

        User::create([
            "name" => "Yan Lagarejo",
            "email" => "i@admin.com",
            "password" => bcrypt("123456")
        ]);

        Post::factory(24)->create();


    }
}