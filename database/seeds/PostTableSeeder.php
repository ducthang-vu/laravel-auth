<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->user_id = 1;
            $newPost->title = $faker->text(50);
            $newPost->body = $faker->paragraph(3, true);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
