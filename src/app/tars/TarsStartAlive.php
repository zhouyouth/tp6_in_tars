<?php
namespace app\tars;


class TarsStartAlive
{


    public function handle()
    {
        $tars = new TarsManage();
        $masterPid = getmypid();
        var_dump($masterPid);
        $tars->keepAlive($masterPid);
    }
}
