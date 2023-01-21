<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CtreteTests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tests:create-unit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria testes unitários para treinamento.';

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
        $tests = "./artisan make:test 'Services/CreateAddressServiceTest' --unit; " .
            "./artisan make:test 'Services/CreateOwnerServiceTest' --unit; " .
            "./artisan make:test 'Services/CreateWindowServiceTest' --unit; " .
            "./artisan make:test 'Services/CreateDoorServiceTest' --unit; " .
            "./artisan make:test 'Services/CreateHouseServiceTest' --unit; " .
            "./artisan make:test 'Services/CreateHouseServiceTest' --unit;";
        $basePath = base_path();
        $this->info(shell_exec("cd {$basePath} && {$tests}"));
        $this->info('End command');
        return 0;
    }
}

