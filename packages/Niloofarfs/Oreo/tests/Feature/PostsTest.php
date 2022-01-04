<?php

namespace Niloofarfs\Oreo\Tests\Feature;

use Orchestra\Testbench\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Niloofarfs\Oreo\Models\Post;

class PostsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function it_can_create_a_post()
    {
        $this->withoutExceptionHandling();
        $attributes = Post::factory()->raw();
        $response = $this->postJson('/posts', $attributes);

        $response
            ->assertStatus(201)
            ->assertExactJson([
                'created' => true,
            ]);
    }
}
