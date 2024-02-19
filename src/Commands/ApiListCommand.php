<?php

namespace Sunwarul\LaravelDx\Commands;

use Illuminate\Console\Command;

class ApiListCommand extends Command
{
    protected $signature = 'api:list';

    public function handle()
    {
        $this->info('Hello world!');
    }
}
