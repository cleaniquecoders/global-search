<?php

namespace CleaniqueCoders\GlobalSearch\Tests;

use CleaniqueCoders\GlobalSearch\GlobalSearchServiceProvider;
use CleaniqueCoders\GlobalSearch\Tests\Enums\SearchType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'CleaniqueCoders\\GlobalSearch\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            GlobalSearchServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('scout.driver', 'database');

        config()->set('global-search.type', SearchType::class);

        config()->set('scout.driver', 'database');
    }
}
