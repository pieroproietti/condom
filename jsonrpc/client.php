<?php
require_once 'includes/jsonRPCClient.php';
$myExample = new jsonRPCClient('http://192.168.1.203:8080/jsonrpc/server.php');

// performs some basic operation
echo '<b>Attempt to perform basic operations</b><br />'."\n";
try {
	echo 'Il tuo nome &egrave;: <i>'.$myExample->giveMeSomeData('name').'</i><br />'."\n";
	$myExample->changeYourState('I am using this function from the network');
	echo 'Your status request has been accepted<br />'."\n";
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
