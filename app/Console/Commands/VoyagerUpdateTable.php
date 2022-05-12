<?php

namespace App\Console\Commands;

use App\Console\Commands\Traits\VoyagerTable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Orangehill\Iseed\Facades\Iseed;

class VoyagerUpdateTable extends Command
{
    use VoyagerTable;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'voyager:update-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the Voyager tables (bread, menus, and roles)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (config('app.env') == 'local') {
            $this->info('You cannot update the Voyager tables in local.');
            $this->info('Aborted!');

            return 0;
        }

        $this->info('Updating...');
        $this->info('...');

        $tables = $this->getTables();
        $prefixClassName = $this->getPrefixClassName();

        foreach ($tables as $table) {
            Artisan::call('db:seed', [
                '--class' => Iseed::generateClassName($table, $prefixClassName)
            ]);
        }

        $this->info('Done');

        return 0;
    }
}
