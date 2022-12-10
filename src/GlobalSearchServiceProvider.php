<?php

namespace CleaniqueCoders\GlobalSearch;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CleaniqueCoders\GlobalSearch\Commands\GlobalSearchCommand;

class GlobalSearchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('global-search')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_global-search_table')
            ->hasCommand(GlobalSearchCommand::class);
    }
}
