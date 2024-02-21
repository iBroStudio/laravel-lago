<?php

namespace IBroStudio\Lago\Commands;

use Illuminate\Console\Command;

class LagoCommand extends Command
{
    public $signature = 'laravel-lago';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
