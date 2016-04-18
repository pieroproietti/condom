<?php
require_once '../includes/jsonRPCClient.php';
$stabile = new jsonRPCClient('http://192.168.1.203:8080/jsonrpc/stabile/server.php');

// performs some basic operation
echo '<b>Esecuzione di drop</b><br/>'."\n";
try {
	if($stabile->drop){
		echo "drop riuscito!<br/>";
	}	else{
		echo "drop NON riuscito!<br/>";
	}

;
} catch (Exception $e) {
	echo nl2br($e->getMessage()).'<br />'."\n";
}

// performs some strategic operation, locally allowed
echo '<br /><b>Attempt to store strategic data</b><br />'."\n";
try {
	$myExample->writeSomething('Strategic string!');
	echo 'Strategic data succefully stored';
} catch (Exception $e) {
	echo nl2br($e->getMessage());
}
?>
