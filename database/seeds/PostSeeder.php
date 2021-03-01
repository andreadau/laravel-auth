<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->words(3,true);
            $newPost->description = $faker->text(100);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->Save();
        }
    }
}
