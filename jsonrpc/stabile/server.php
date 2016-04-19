<?php

require_once '../../vendor/autoload.php';
use JsonRPC\Server;

require 'api.php';

$server = new Server();
//->bind(procedure,APi, 'method')
$server->bind('add', 'Api');
$server->bind('id', 'Api');
$server->bind('uuid', 'Api');
$server->bind('folder_stabile', 'Api');
$server->bind('dropDb', 'Api');
$server->bind('createDb', 'Api');
$server->bind('createStructure', 'Api');

$server->attach(new Api());
echo $server->execute();
