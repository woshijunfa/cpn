<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\User;
use App\Models\Order;
use App\Models\RadCheck;
use App\Models\UserService;
// use App\Services\UserService;
use App\Services\CurlService;
use View;
use Log;

class acc extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'acc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $newpass = rand(100000,999999);
       $result =  RadCheck::where("username","test")->update(['value'=>"$newpass"]);
       Log::info("php_artisan_acc pss:" . $newpass);
    }
}






