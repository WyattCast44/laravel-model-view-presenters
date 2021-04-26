<?php

namespace Wyattcast44\ModelViewPresenter\Commands;

use Illuminate\Console\Command;

class ModelViewPresenterCommand extends Command
{
    public $signature = 'laravel-model-view-presenters';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
