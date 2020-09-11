<?php

namespace Aminetiyal\LaravelAdminlte\Tests;

use Orchestra\Testbench\TestCase;
use Aminetiyal\LaravelAdminlte\LaravelAdminlteServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAdminlteServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
