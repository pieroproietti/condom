<?php

require 'fguillot/json-rpc/src/JsonRPC/Server.php';
require 'fguillot/json-rpc/src/JsonRPC/Client.php';

use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203:8080/jsonrpc/stabile/server.php');
$stabile->debug = true;

echo 'Stabile: let;<br/>'."\n";
$parStabile=array('id' => 1, 'uuid' => 'test', 'codice' => 'test');
$stabile->execute('setStabile',$parStabile);
$getStabile=$stabile->execute('getStabile');
echo "<br/>";
print_r($parStabile);
echo "<br/>";
print_r($getStabile);
echo "<br/>";
