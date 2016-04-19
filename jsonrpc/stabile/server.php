<?php

require_once '../../vendor/autoload.php';
use JsonRPC\Server;

require 'api.php';

$server = new Server();
//->bind(procedure,APi, 'method')
$server->bind('id', 'Api');
$server->bind('uuid', 'Api');
$server->bind('folder_stabile', 'Api');
$server->bind('dropDb', 'Api');
$server->bind('createDb', 'Api');
$server->bind('createDbStructure', 'Api');
$server->bind('copy', 'Api');
$server->bind('view', 'Api');

$server->attach(new Api());
echo $server->execute();
