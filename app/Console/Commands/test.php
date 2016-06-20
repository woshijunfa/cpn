<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\User;
use App\Services\UserService;
use View;

class test extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

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
        // $resul = UserService::sendRegiestEmail("1026487348@qq.com",'ssss');
        // var_dump($resul);die;

        // $content = View::make('passport.login')->render();

        // var_dump($content);die;

        $uuid = "sdfsdfs";
        $userInfo = User::where("email_key",$uuid)->first();
        var_dump($userInfo);
die;

        $result = User::initEmail("xxx3@qufenqi.com");
        //
        var_dump($result);
    }
}
