<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CtreteMigrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tests:create-migrations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria Migrações para treinamento.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info($this->description);
        $this->info('Start command');
        $tests = "./artisan make:migration 'CreateAddressesTable'; " .
            "./artisan make:migration 'CreateRoomTypeTable';" .
            "./artisan make:migration 'CreateOwnersTable'; " .
            "./artisan make:migration 'CreateWindowsTable'; " .
            "./artisan make:migration 'CreateDoorsTable'; " .
            "./artisan make:migration 'CreateHousesTable'; " .
            "./artisan make:migration 'CreateRoomTable';" .
            "./artisan make:migration 'CreateRoomDoorTable';" .
            "./artisan make:migration 'CreateRoomTypesTable';".
            "touch database/database.sqlite";
        $basePath = base_path();
        $this->info(shell_exec("cd {$basePath} && {$tests}"));
        $this->info('End command');
        return 0;
    }
}

