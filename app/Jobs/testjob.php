<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class testjob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

	protected $m_obJ;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        //
	$this->m_obj = $input;
	Log::info('init_obj' . json_encode($input));
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
	Log::info('process job -- '. json_encode($this->m_obj));
    }
}

