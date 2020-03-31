<?php

namespace VCComponent\Laravel\Config\Test\Feature\Option;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Test\TestCase;

class CreateOptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_create_option()
    {
        $data = [
            'key'   => 'key1',
            'value' => 'value1',
        ];

        $response = $this->json('POST', route('options.create'), $data);

        $this->assertDatabaseHas('options', $data);
        $response->assertJson(['data' => $data]);
    }
}
