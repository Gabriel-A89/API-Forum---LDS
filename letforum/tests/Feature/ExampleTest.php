<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function can_create_a_thread() {
        //given 
        $thread = [
            'title' => 'test',
            'body' => 'test body'
        ];

        //when
        $response = $this->post('/thread');

        //then
        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }
}
