<?php

namespace App\Jobs;

use App\Models\Cron;

class TestJob
{
    public function __invoke()
    {
        $cron = new Cron();
        $cron->datahora = date('Y-m-d H:i:s');
        return $cron->save();
    }
}
