<?php

namespace Heybot\LaravelActions;

use Heybot\LaravelActions\Commands\LaravelActionsCommand;
use Heybot\LaravelActions\Commands\StubPublishCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-actions')
            ->hasCommands(
                LaravelActionsCommand::class,
                StubPublishCommand::class,
            )
            ->hasConfigFile('actions')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command->publishConfigFile();
            });
    }
}
