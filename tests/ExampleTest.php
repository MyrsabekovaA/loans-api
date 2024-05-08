<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    public function test_that_base_endpoint_returns_a_successful_response()
    {
        $response = $this->get('/loans');

        $response->assertResponseStatus(200);
        $this->assertEquals('[]', $response->response->getContent());
    }
}
