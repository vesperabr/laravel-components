<?php

namespace Vespera\LaravelComponents\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            'Vespera\LaravelComponents\Support\ServiceProvider',
        ];
    }
}
