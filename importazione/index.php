<?php

require '../medoo.php';

function stabile_uuid($db, $id)
{
    $retval = '';
    $sql = "SELECT uuid FROM stabili WHERE id=$id";
    $rows = $db->query($sql)->fetchAll();
    foreach ($rows as $row) {
        $retval = $row['uuid'];
    }

    return $retval;
}

function dbCreate($dbc)
{
    $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);
    if ($db->connect_errno) {
        echo 'Errno: '.$db->connect_errno."\n";
        echo 'Error: '.$db->connect_error."\n";
        exit;
    } else {
        $db->query('DROP DATABASE `'.$dbc['name'].';');
        $db->query('CREATE DATABASE IF NOT EXISTS `'.$dbc['name'].'` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;');
        $db->query('USE `'.$dbc['name'].'`;');
        $db->close();
    }
}

function dbDrop($dbc)
{
    $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);
    if ($db->connect_errno) {
        echo 'Errno: '.$db->connect_errno."\n";
        echo 'Error: '.$db->connect_error."\n";
        exit;
    } else {
        $db->query('DROP DATABASE `'.$dbc['name'].';');
        $db->close();
    }
}

/*
* main
*/

$linuxCondomAddress = '127.0.0.1';
$linuxCondomUser = 'condom';
$linuxCondomPass = 'condom';
$aDbCondom = [
  'server' => $linuxCondomAddress,
  'username' => $linuxCondomUser,
  'password' => $linuxCondomPass,
  'name' => 'condom',
  'charset' => 'utf8',
];

$windowsCondomAddress = '192.168.1.203';
$windowsCondomUser = 'condom';
$windowsCondomPass = 'condom';

$aDbPartiComuni = [
  'server' => $windowsCondomAddress,
  'username' => $windowsCondomUser,
  'password' => $windowsCondomPass,
  'name' => 'parti_comuni',
  'charset' => 'utf8',
];

$aDbGeneraleStabile = [
  'server' => $windowsCondomAddress,
  'username' => $windowsCondomUser,
  'password' => $windowsCondomPass,
  'name' => 'generale_stabile',
  'charset' => 'utf8',
];

$aDbSingoloAnno = [
  'server' => $windowsCondomAddress,
  'username' => $windowsCondomUser,
  'password' => $windowsCondomPass,
  'name' => 'singolo_anno',
  'charset' => 'utf8',
];

// creazione del database condom
dbCreate($aDbPartiComuni);
dbCreate($aDbCondom);

// Database di destinazione
$dbCondom = new medoo([
    'database_type' => 'mysql',
    'database_name' => $aDbCondom['name'],
    'server' => $aDbCondom['server'],
    'username' => $aDbCondom['username'],
    'password' => $aDbCondom['password'],
    'charset' => $aDbCondom['charset'],
        ]);

$dbPartiComuni = new medoo([
    'database_type' => 'mysql',
    'database_name' => $aDbPartiComuni['name'],
    'server' => $aDbPartiComuni['server'],
    'username' => $aDbPartiComuni['username'],
    'password' => $aDbPartiComuni['password'],
    'charset' => $aDbPartiComuni['charset'],
        ]);

echo '<li>avvio importazione da access: Parti_comuni'.'</li>';
require "../parti_comuni/index.php";
accessImportazione($aDbPartiComuni);
echo '<li>fine importazione da access: Parti_comuni'.'</li>';

echo '<li>avvio importazione Parti_comuni'.'</li>';
require 'parti_comuni_import.php';
partiComuniImport($dbPartiComuni, $dbCondom);
echo '<li>fine importazione Parti_comuni'.'</li>';

echo '<li>cancellazione Parti_comuni'.'</li>';
dbDrop($aDbPartiComuni);
echo '<li>dine cancellazione Parti_comuni'.'</li>';

echo '<li>avvio importazione stabili'.'</li>';
$dbCondom->select("stabili",['id','uuid','denominazion','cartella');

foreach ($stabili as $stabile) {
  echo "<li>Stabile id= $stabile['id'], uuid=$stabile['uuid'], denominazione=$stabile['denominazione']";
  dbCreate($aDbGeneraleStabile);
  
}
