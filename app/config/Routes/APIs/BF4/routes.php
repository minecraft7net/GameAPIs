<?php

$router->add('/bf4/query/status/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\BF4\Query\Status',
    'controller'    => 'index',
    'action'        => 'index'
]);

$router->add('/bf4/query/info/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\BF4\Query\Info',
    'controller'    => 'index',
    'action'        => 'index'
]);

$router->add('/bf4/query/players/{ip}', [
    'namespace'     => 'GameAPIs\Controllers\APIs\BF4\Query\Players',
    'controller'    => 'index',
    'action'        => 'index'
]);

 ?>