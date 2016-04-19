<?php
require_once  '../../vendor/autoload.php';
use JsonRPC\Client;
$stabile = new Client('http://192.168.1.203/condom/jsonrpc/stabile/server.php');
$stabile->debug = true;


echo "Class Stabile: <b>id </b><br/>"."\n";
$stabile->execute('id', [1]);
$stabile->execute('uuid', ['test']);
$stabile->execute('folder_stabile', ['0001']);

echo "<br/>Stabile: <b>drop </b><br/>"."\n";
$result = $stabile->execute('drop');
var_dump($result);

echo "<br/>Stabile: <b>create </b><br/>"."\n";
$result = $stabile->execute('create');
var_dump($result);

echo "<br/>Stabile: <b>import </b><br/>"."\n";
$result = $stabile->execute('import');
var_dump($result);

echo "<br/>";
