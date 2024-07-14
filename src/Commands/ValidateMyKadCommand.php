<?php

namespace xaim\ValidateMyKad\Commands;

use Illuminate\Console\Command;

class ValidateMyKadCommand extends Command
{
    public $signature = 'validate-my-kad';

    public $description = 'Validate Extracted MyKad From the Actual Card';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
