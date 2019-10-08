<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
/**
 * @group postgroup
 */
class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreatePost()
    {
        $post = new Post (['title', 'body']);
        
        $this->assertTrue($post->has('title'));
        $this->assertTrue($post->has('body'));
    }

    public function testEditPost()
    {
        $post = factory(Post::class)->create();
        
        $data = [
            'title' => $this->faker->word,
            'body' => $this->faker->word
        ];
        
        $postRepo = new Post($post);
        $update = $postRepo->updatePost($data);

        $this->assertTrue($update);
    }
}
