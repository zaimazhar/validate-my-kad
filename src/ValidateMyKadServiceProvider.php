<?php

namespace xaim\ValidateMyKad;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use xaim\ValidateMyKad\Commands\ValidateMyKadCommand;

class ValidateMyKadServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('validate-my-kad')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_validate-my-kad_table')
            ->hasCommand(ValidateMyKadCommand::class);
    }
}
