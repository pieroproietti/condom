<?php
require __DIR__ . '/vendor/autoload.php';
use JsonRPC\Server;
require "api.php";
$server = new Server;

$server->bind('drop', 'Api');
$server->bind('create', 'Api');
$server->bind('define', 'Api');
$server->bind('import', 'Api');

$server->attach(new Api);
echo $server->execute();
