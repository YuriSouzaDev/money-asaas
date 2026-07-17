<?php

namespace Moneyasaas\MoneyAsaas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Moneyasaas\MoneyAsaas\MoneyAsaas
 */
class MoneyAsaas extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Moneyasaas\MoneyAsaas\MoneyAsaas::class;
    }
}
