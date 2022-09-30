<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
            'name' => 'Ihtiandiko',
            'username' => 'ihtiandiko',
            'email' => 'wihtiandiko@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Wicaksono',
        //     'email' => 'wihtiandiko@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Diko',
        //     'email' => 'ihti@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);



        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Post::factory(20)->create();
    }
}
