<?php

/**
 * @Author: Songyu
 * @Date:   2018-05-27 21:47:03
 * @Last Modified by:   Songyu
 * @Last Modified time: 2018-05-27 21:54:24
 */

include "vendor/autoload.php";
// var_dump(is_file('./vendor/autoload.php'));
// exit();
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');
?>