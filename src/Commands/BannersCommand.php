<?php

namespace AdminKit\Banners\Commands;

use Illuminate\Console\Command;

class BannersCommand extends Command
{
    public $signature = 'admin-kit-banners';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
