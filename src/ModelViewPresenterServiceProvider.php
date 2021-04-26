<?php

namespace Wyattcast44\ModelViewPresenter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wyattcast44\ModelViewPresenter\Commands\ModelViewPresenterCommand;

class ModelViewPresenterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-view-presenters')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-model-view-presenters_table')
            ->hasCommand(ModelViewPresenterCommand::class);
    }
}
