<?php
require 'http://127.0.0.1:8080/vendor/autoload.php';

use JsonRPC\Server;
require "api.php";
$server = new Server;

$server->bind('drop', 'Api');
$server->bind('create', 'Api');
$server->bind('define', 'Api');
$server->bind('import', 'Api');

$server->attach(new Api);
echo $server->execute();
