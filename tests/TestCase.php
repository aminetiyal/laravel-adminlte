<?php

namespace Aminetiyal\LaravelAdminlte\Tests;

use Aminetiyal\LaravelAdminlte\AdminlteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;


class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders()
    {
        return [AdminlteServiceProvider::class];
    }

}
