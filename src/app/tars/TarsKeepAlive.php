<?php

namespace app\tars;


class TarsKeepAlive
{


    public function handle()
    {


        swoole_timer_tick(1000 * 10, function () {
            $tars = new TarsManage();
            $masterPid = $tars->getMasterAlivePid();
            var_dump($masterPid);
            $tars->keepAlive($masterPid);
        });

    }
}
