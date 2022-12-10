<?php

namespace CleaniqueCoders\GlobalSearch\Commands;

use Illuminate\Console\Command;

class GlobalSearchCommand extends Command
{
    public $signature = 'global-search';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
