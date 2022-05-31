<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Post::create([
            'name'      =>  $faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
