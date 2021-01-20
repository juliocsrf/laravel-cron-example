<?php

namespace App\Console\Commands\Cron;

use App\Models\Cron;
use Illuminate\Console\Command;

class DayCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa todo dia';

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
        $cron = new Cron();
        $cron->day = date('Y-m-d H:i:s');
        return $cron->save();
    }
}
