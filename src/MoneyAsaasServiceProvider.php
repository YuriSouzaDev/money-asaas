<?php

namespace Moneyasaas\MoneyAsaas;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Moneyasaas\MoneyAsaas\Commands\MoneyAsaasCommand;

class MoneyAsaasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('money-asaas')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_money_asaas_table')
            ->hasCommand(MoneyAsaasCommand::class);
    }
}
