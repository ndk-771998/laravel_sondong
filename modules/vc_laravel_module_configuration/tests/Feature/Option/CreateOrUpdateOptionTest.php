<?php

namespace VCComponent\Laravel\Config\Test\Feature\Option;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Test\TestCase;

class CreateOrUpdateOptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_create_option()
    {
        $data = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ];

        $response = $this->json('POST', route('options.create-or-update'), $data);

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

    /**
     * @test
     */
    public function can_update_existed_option()
    {
        factory(Option::class)->create(['key' => 'key1', 'value' => 'value1']);

        $this->assertDatabaseHas('options', ['key' => 'key1', 'value' => 'value1']);

        $data = [
            'key1' => 'value1 update',
        ];

        $response = $this->json('POST', route('options.create-or-update'), $data);

        $check = [
            'key'   => 'key1',
            'value' => 'value1 update',
        ];
        $this->assertDatabaseHas('options', $check);
        $this->assertSame('value1 update', Option::getOption('key1'));
    }
}
