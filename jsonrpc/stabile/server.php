<?php

require 'fguillot/json-rpc/src/JsonRPC/Server.php';
require 'fguillot/json-rpc/src/JsonRPC/Client.php';
require 'fguillot/json-rpc/src/JsonRPC/AccessDeniedException.php';
require 'fguillot/json-rpc/src/JsonRPC/ResponseException.php';

use JsonRPC\Server;

require 'api.php';
$server = new Server();

$server->bind('setStabile', 'Api');
$server->bind('getStabile', 'Api');
$server->bind('drop', 'Api');
$server->bind('create', 'Api');
$server->bind('import', 'Api');
$server->attach(new Api());

echo $server->execute();
