<?php

namespace JfBiswajit\TranslaFlex\Console\Command;

use Illuminate\Console\Command;

class PublishTranslaFlex extends Command
{
    protected $signature = 'translaflex:publish';

    protected $description = 'Publish TranslaFlex';

    public function handle()
    {
        $this->call('vendor:publish', [
            '--provider' => 'Spatie\TranslationLoader\TranslationServiceProvider',
            '--tag' => 'migrations',
        ]);

        $this->info('TranslaFlex published.');
    }
}
