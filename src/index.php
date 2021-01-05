<?php
// tars 平台然后文件
//读取tars conf配置

$args = $argv;
$tp_cmd = dirname(__FILE__).DIRECTORY_SEPARATOR.'think';
$args[2] = isset($argv[2]) ? $argv[2] : 'start';
//php think swoole [start|stop|reload|restart]
$swoole_cmd = ' swoole '.$args[2];
$cmd = "/usr/bin/php  " . $tp_cmd . $swoole_cmd;
system($cmd, $r);









