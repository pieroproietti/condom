<?php
require /vendor/autoload.php';
use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203:8080/jsonrpc/stabile/server.php');

// performs some basic operation
echo 'Stabile: drop;<br/>'."\n";
$stabile->execute('drop', [3, 5]);
