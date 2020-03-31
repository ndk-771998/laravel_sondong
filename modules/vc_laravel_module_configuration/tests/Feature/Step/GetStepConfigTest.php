<?php

namespace VCComponent\Laravel\Config\Test\Feature\Step;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Test\TestCase;

class GetStepConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_get_step_config()
    {
        $config = $this->app['config']->get('step');

        $response = $this->get(route('steps.get.config'));

        $response->assertJson($config);
    }

    /**
     * @test
     */
    public function can_get_step_config_and_option_values()
    {
        $data = [
            [
                'key'   => 'input1',
                'value' => 'input 1 value',
            ],
            [
                'key'   => 'input2.1',
                'value' => 'input 2.1 value',
            ],
        ];
        foreach ($data as $item) {
            $option = factory(Option::class)->create($item);
            $this->assertDatabaseHas('options', $option->toArray());
        }

        $config                          = $this->app['config']->get('step');
        $config[0]['inputs'][0]['value'] = $data[0]['value'];
        $config[1]['inputs'][1]['value'] = $data[1]['value'];
        $config[2]['inputs'][0]['value'] = '';

        $response = $this->get(route('steps.get.config'));

        $response->assertJson($config);
    }
}
