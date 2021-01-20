<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cron = new TestJob();
        $cron();
        return response()->json(['success'=>true]);
    }
}
