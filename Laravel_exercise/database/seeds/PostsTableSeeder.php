<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            'user_id' => 7,
            'title' => 'Digital Lab Headlines',
            'body' => 'This is whats going on around the Digital Labe at BC Childrens Hospital this week',
            'created_at' => 'July 18, 2019',
            'views' => 170
        ]);

        Post::insert([
            'user_id' => 7,
            'title' => 'Hey Everyone',
            'body' => 'How is everybody doing today?',
            'created_at' => 'July 14, 2019',
            'views' => 72
        ]);

        Post::insert([
            'user_id' => 2,
            'title' => 'Events',
            'body' => 'Here are a few upcoming events within BC Childrens Hospital',
            'created_at' => 'July 10, 2019',
            'views' => 12
        ]);

        Post::insert([
            'user_id' => 2,
            'title' => 'Post',
            'body' => 'Some other post content',
            'created_at' => 'July 9, 2019',
            'views' =>200
        ]);

        Post::insert([
            'user_id' => 1,
            'title' => 'Post',
            'body' => 'These two posts have the same views and are therefore sorted by date',
            'created_at' => 'July 1, 2019',
            'views' => 200
        ]);
    }
}
