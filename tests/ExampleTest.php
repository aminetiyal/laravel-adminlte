<?php

namespace Aminetiyal\LaravelAdminlte\Tests;

use Orchestra\Testbench\TestCase;
use Aminetiyal\LaravelAdminlte\AdminlteServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AdminlteServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
