<?php
require_once 'includes/jsonRPCServer.php';
require 'stabile.php';

$stabile = new stabile();
jsonRPCServer::handle($stabile)
	or print 'no request';
?>
