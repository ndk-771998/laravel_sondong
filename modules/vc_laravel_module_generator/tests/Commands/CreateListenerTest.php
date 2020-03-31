<?php

namespace VCComponent\Laravel\Generator\Test\Commands;

use VCComponent\Laravel\Generator\Test\Commands\CommandTestCase;

class CreateListenerTest extends CommandTestCase
{
    /**
     * Get create listener command to run
     *
     * @return string
     */
    protected function getCreateListenerCommand($listener_name)
    {
        return 'make:package:listener ' . $this->packageName . ' ' . $listener_name;
    }

    /**
     * @test
     */
    public function can_create_listener()
    {
        $listener_name = 'example';

        $this->artisan($this->getCreatePackageCommand())
            ->assertExitCode(0);

        $this->artisan($this->getCreateListenerCommand($listener_name))
            ->expectsOutPut('Listener generate successful')
            ->assertExitCode(0);
    }

    /**
     * @test
     */
    public function can_create_listener_recursively()
    {
        $listener_name = 'example/example';

        $this->artisan($this->getCreatePackageCommand())
            ->assertExitCode(0);

        $this->artisan($this->getCreateListenerCommand($listener_name))
            ->expectsOutPut('Listener generate successful')
            ->assertExitCode(0);
    }

    /**
     * @test
     */
    public function cannot_create_listener_if_listener_already_existed()
    {
        $listener_name = 'example/example';

        $this->artisan($this->getCreatePackageCommand())
            ->assertExitCode(0);

        $this->artisan($this->getCreateListenerCommand($listener_name))
            ->expectsOutPut('Listener generate successful')
            ->assertExitCode(0);

        $this->artisan($this->getCreateListenerCommand($listener_name))
            ->expectsOutPut('Listener already existed')
            ->assertExitCode(1);
    }

    /**
     * @test
     */
    public function cannot_create_listener_if_package_does_not_exist()
    {
        $listener_name = 'example/example';

        $this->artisan($this->getCreateListenerCommand($listener_name))
            ->expectsOutPut('Package does not exist')
            ->assertExitCode(1);
    }
}
