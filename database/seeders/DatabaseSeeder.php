<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Post::factory(5)->create();


        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        //     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        //     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        //     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        //     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        //     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"
        // ]);
    }
}
