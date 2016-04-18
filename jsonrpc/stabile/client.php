<?php

require 'JsonRPC/Client.php';

use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203/condom/jsonrpc/stabile/server.php');
$stabile->debug = true;

echo 'Stabile: let;<br/>'."\n";
$parStabile=array('id' => 1, 'uuid' => 'test', 'codice' => 'test');
//$stabile->execute('set',$parStabile);
$getStabile=$stabile->execute('get');
echo "<br/>";
print_r($parStabile);
echo "<br/>";
print_r($getStabile);
echo "<br/>";
