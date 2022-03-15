<?php

namespace Andreger\Bootstrap\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Andreger\Bootstrap\BootstrapServiceProvider;

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
            BootstrapServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
