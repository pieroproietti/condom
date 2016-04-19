<?php

require_once '../../vendor/autoload.php';
use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203/condom/jsonrpc/stabile/server.php');
$stabile->debug = true;

echo '<br/>Stabile: <b>drop </b><br/>'."\n";
$result = $stabile->execute('drop');
var_dump($result);

echo '<br/>Stabile: <b>createDb </b><br/>'."\n";
$result = $stabile->execute('createDb');
var_dump($result);

echo '<br/>Stabile: <b>createDbStructure </b><br/>'."\n";
$result = $stabile->execute('createDbStructure');
var_dump($result);

echo '<br/>Stabile: <b>copy </b><br/>'."\n";
$result = $stabile->execute('copy',['id'=>7,'uuid'=>'75489a66-0a48-4f90-a543-f9561f5d9215','folder_stabile'=>'0007']);
var_dump($result);

echo '<br/>';
