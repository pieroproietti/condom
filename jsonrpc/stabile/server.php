<?php

require 'fguillot/json-rpc/src/JsonRPC/Server.php';
require 'fguillot/json-rpc/src/JsonRPC/Client.php';

use JsonRPC\Server;

require 'api.php';
$server = new Server();

$server->bind('set', 'Api');
$server->bind('get', 'Api');
$server->bind('drop', 'Api');
$server->bind('create', 'Api');
$server->bind('import', 'Api');
$server->attach(new Api());

echo $server->execute();
