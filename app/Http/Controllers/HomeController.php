<?php

namespace App\Http\Controllers;

use App\Jobs\EveryMinuteJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cron = new EveryMinuteJob();
        $cron();
        return response()->json(['success'=>true]);
    }
}
