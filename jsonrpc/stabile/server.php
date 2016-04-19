<?php

require_once '../../vendor/autoload.php';
use JsonRPC\Server;

require 'api.php';

$server = new Server();
//->bind(procedure,APi, 'method')
$server->bind('dropDb', 'Api');
$server->bind('createDb', 'Api');
$server->bind('createDbStructure', 'Api');
$server->bind('importDb', 'Api');

$server->attach(new Api());
echo $server->execute();
