<?php
require_once  '../../vendor/autoload.php';
use JsonRPC\Server;
require 'api.php';

$server = new Server();
$server->bind('let', 'Api', 'let');
$server->bind('get', 'Api', 'get');
//$server->bind('drop', 'Api');
//$server->bind('create', 'Api');
//$server->bind('import', 'Api');
//$server->attach(new Api());
echo $server->execute();
