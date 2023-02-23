<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_the_application_returns_a_successful_response()
=======
    public function test_example()
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
