<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\User;
use App\Services\UserService;
use App\Services\CurlService;
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
        $headerInfo = [
            'Accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Connection'=>'keep-alive',
            'Accept-Language'=>'en-US,en;q=0.8,zh-CN;q=0.6,zh;q=0.4',
            'Cache-Control'=>'no-cache',
        ];

        $cookie = '_dallas_session=BAh7CEkiD3Nlc3Npb25faWQGOgZFVEkiJTViZjRlODRkOTNmY2Y5YjgzODZmNmMxNjhmN2ExMjFjBjsAVEkiGXdhcmRlbi51c2VyLnVzZXIua2V5BjsAVFsHWwZpAiaiSSIiJDJhJDEwJE1VNEFLNzNDTFJWWEhLaXhVSUJ4bk8GOwBUSSIQX2NzcmZfdG9rZW4GOwBGSSIxTmVhUnlqSk00MW1MTVpjaDg3cTNnbGJOYnFFY2N0aWV0eitsNzVqTUo4az0GOwBG--9c1a4d74fc9e5a4506d4660a0f91da477e10d66c';
        $curlService = new CurlService('https://www.yuntiprivaten.com/admin',$headerInfo,$cookie);

        $result = $curlService->get();
        var_dump($result);
        var_dump($curlService->status);
        var_dump($curlService->contentType);
        var_dump($curlService->content);

    }
}






