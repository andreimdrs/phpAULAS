<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\DbDumper\Databases\MySql;
class ExportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:export {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the database to an SQL file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $file = $this->argument('file');

        MySql::create()
            ->setDbName(config('database.connections.mysql.database'))
            ->setUserName(config('database.connections.mysql.username'))
            ->setPassword(config('database.connections.mysql.password'))
            ->dumpToFile($file);

        $this->info("Database exported to {$file}");
    }
}
