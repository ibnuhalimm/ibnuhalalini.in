<?php

namespace App\Console\Commands;

use App\Console\Commands\Traits\VoyagerTable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class VoyagerSeedTable extends Command
{
    use VoyagerTable;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'voyager:generate-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a seeder for the Voyager tables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Start...');

        $tables = $this->getTables();

        foreach ($tables as $table) {
            $this->info('- Generating ' . $table . ' table');

            Artisan::call('iseed', [
                'tables' => $table, // options
                '--force' => true,
                '--classnameprefix' => $this->getPrefixClassName()
            ]);
        }

        $this->info('');
        $this->info('Done!');

        return 0;
    }
}
