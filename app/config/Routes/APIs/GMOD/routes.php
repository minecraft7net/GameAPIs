<?php

$APIs->add('/gmod/query/status/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\GMOD\Query\Status',
    'controller'    => 'index',
    'action'        => 'index'
]);

$APIs->add('/gmod/query/info/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\GMOD\Query\Info',
    'controller'    => 'index',
    'action'        => 'index'
]);

$APIs->add('/gmod/query/players/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\GMOD\Query\Players',
    'controller'    => 'index',
    'action'        => 'index'
]);

 ?>
