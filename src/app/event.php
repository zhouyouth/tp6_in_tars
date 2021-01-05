<?php
// 事件定义文件
return [
    'bind'      => [
    ],

    'listen'    => [
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],

        'swoole.start' =>[app\tars\TarsStartAlive::class,app\tars\TarsKeepAlive::class],
    ],

    'subscribe' => [
    ],
];
