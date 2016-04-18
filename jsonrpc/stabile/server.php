<?php

require 'JsonRPC/Server.php';

use JsonRPC\Server;

require 'api.php';
$server = new Server();

$server->bind('let', 'Api');
$server->bind('get', 'Api');
$server->bind('drop', 'Api');
$server->bind('create', 'Api');
$server->bind('import', 'Api');
$server->attach(new Api());

echo $server->execute();
