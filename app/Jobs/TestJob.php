<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * 任务可以尝试的最大次数。
     * php artisan queue:work --tries=3
     *
     * @var int
     */
    public $tries = 5;

    /**
     * 定义任务超时时间
     * 作为另外一个选择来定义任务在失败前会尝试多少次，你可以定义一个任务超时时间。这样的话，在给定的时间范围内，任务可以无限次尝试
     * php artisan queue:work --timeout=30
     *
     * @return \DateTime
     */
    public function retryUntil()
    {
        return now()->addSeconds(5);
    }


    /**
     * 任务可以执行的最大秒数 (超时时间)。
     * 你可能也想在任务类自身定义一个超时时间。如果在任务类中指定，优先级将会高于命令行
     *
     * @var int
     */
    public $timeout = 120;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'job output' . PHP_EOL;
    }
}
