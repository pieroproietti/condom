<?php
require_once '../includes/jsonRPCClient.php';
$stabile = new jsonRPCClient('http://192.168.1.203:8080/jsonrpc/stabile/server.php');

// performs some basic operation
echo 'Stabile: drop</b><br/>'."\n";
try {
	if($stabile->drop()){
		echo "drop riuscito!<br/>";
	}	else{
		echo "drop NON riuscito!<br/>";
	}
} catch (Exception $e) {
	echo nl2br($e->getMessage()).'<br />'."\n";
}
