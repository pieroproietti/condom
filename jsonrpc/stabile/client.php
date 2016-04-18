<?php

require 'JsonRPC/Client.php';

use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203/condom/jsonrpc/stabile/server.php');
$stabile->debug = true;


echo "Stabile: <b>let </b><br/>"."\n";
$parStabile=array('id' => 1, 'uuid' => 'parametro', 'codice' => 'test');
$stabile->execute('let', $parStabile);
print_r($parStabile);

echo "Stabile: <b>get </b><br/>"."\n";
$getStabile=$stabile->execute('get');
print_r($getStabile);
echo "<br/>";
