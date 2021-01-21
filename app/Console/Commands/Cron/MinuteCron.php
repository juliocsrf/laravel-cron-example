<?php

namespace App\Console\Commands\Cron;

use App\Models\Cron;
use Illuminate\Console\Command;

class MinuteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa a cada minuto';

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
        $cron->every_minute = date('Y-m-d H:i:s', strtotime('+10 days'));
        return $cron->save();
    }
}
