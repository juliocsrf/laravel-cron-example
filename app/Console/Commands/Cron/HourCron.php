<?php

namespace App\Console\Commands\Cron;

use App\Models\Cron;
use Illuminate\Console\Command;

class HourCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:hour';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa a cada 1 hora';

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
        $cron->hour = date('Y-m-d H:i:s');
        return $cron->save();
    }
}
