<?php

use JsonRPC\Client;

$stabile = new Client('http://192.168.1.203:8080/jsonrpc/stabile/server.php');

// performs some basic operation
echo 'Stabile: drop;<br/>'."\n";
try {
	if($stabile->drop()){
		echo "<li>drop riuscito!</li>";
	}	else{
		echo "<li>drop NON riuscito!</li>";
	}
} catch (Exception $e) {
	echo nl2br($e->getMessage()).'<br />'."\n";
}
