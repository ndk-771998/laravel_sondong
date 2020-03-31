<?php

namespace VCComponent\Laravel\Config\Test\Feature\Step;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Test\TestCase;

class SaveStepConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_save_step_config()
    {
        $data = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ];

        $response = $this->json('POST', route('steps.save.config'), $data);

        $check = [
            [
                'key'   => 'key1',
                'value' => 'value1',
            ],
            [
                'key'   => 'key2',
                'value' => 'value2',
            ],
            [
                'key'   => 'key2',
                'value' => 'value2',
            ],
        ];
        foreach ($check as $item) {
            $this->assertDatabaseHas('options', $item);
        }
    }
}
