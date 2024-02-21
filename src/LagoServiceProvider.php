<?php

namespace IBroStudio\Lago;

use IBroStudio\Lago\Sdk\LagoSdk;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LagoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-lago')
            ->hasConfigFile();

        $this->mergeConfigFrom(
            __DIR__.'/../config/saloon.php',
            'saloon'
        );

        $this->app->singleton(
            abstract: LagoSdk::class,
            concrete: fn () => new LagoSdk(
                url: config('lago.api.url'),
                key: config('lago.api.key'),
            )
        );
    }
}
