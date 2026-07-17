<?php

namespace Moneyasaas\MoneyAsaas\Commands;

use Illuminate\Console\Command;

class MoneyAsaasCommand extends Command
{
    public $signature = 'money-asaas';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
