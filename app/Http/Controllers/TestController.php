<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'test::index';
    }

    public function testJob()
    {
        //同步调度
//        TestJob::dispatch();

        //延迟分发
//        TestJob::dispatch()->delay(now()->addSecond(5));//延迟5秒钟
//        TestJob::dispatch()->delay(now()->addMinute(1));//延迟1分钟
//        TestJob::dispatch()->delay(now()->addHour(1));//延迟1小时
//        TestJob::dispatch()->delay(now()->addDay(1));//延迟5天

        //任务链 一旦序列中的任务失败了，剩余的工作将不会执行
//        TestJob::withChain([
//            new OptimizePodcast,
//            new ReleasePodcast
//        ])->dispatch();

        //链连接和队列 allOnConnection 默认连接 allOnQueue 队列 指定
//        TestJob::dispatch()->allOnConnection('redis')->allOnQueue('test');

        //分发任务到指定队列
//        TestJob::dispatch()->onQueue('test');

        return 'test::job';
    }

}
