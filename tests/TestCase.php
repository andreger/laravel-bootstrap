<?php

namespace LaravelBootstrap\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use LaravelBootstrap\LaravelBootstrapServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use InteractsWithViews;

    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelBootstrapServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
