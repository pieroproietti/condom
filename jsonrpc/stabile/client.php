<?php
use JsonRPC\Client;
require_once '../../vendor/autoload.php';
$dbc = [
    'server' => 'localhost',
    'username' => 'condom',
    'password' => 'condom',
    'name' => 'generale_stabile'
  ];
$stabile = new Client('http://192.168.1.203/condom/jsonrpc/stabile/server.php');
$stabile->debug = true;

echo "<h1>Test rpc</h1>";

echo '<br/>Stabile: <b>drop </b><br/>'."\n";
$result = $stabile->execute('drop', [$dbc]);
echo "\$result:";
var_dump($result);

echo '<br/>Stabile: <b>createDb </b><br/>'."\n";
$result = $stabile->execute('createDb', [$dbc]);
echo "\$result:";
var_dump($result);

echo '<br/>Stabile: <b>createDbStructure </b><br/>'."\n";
$result = $stabile->execute('createDbStructure', [$dbc]);
echo "\$result:";
var_dump($result);

echo '<br/>Stabile: <b>importDb </b><br/>'."\n";
$param=['id'=>7,'uuid'=>'75489a66-0a48-4f90-a543-f9561f5d9215','folder_stabile'=>'0007'];
$dbc_param=array_merge($dbc,$param);
//echo "\$param: ";
//print_r($dbc_param);
//echo '<br/>';
$result = $stabile->execute('importDb', [$dbc_param]);
echo "\$result:";
var_dump($result);
echo '<br/>';
