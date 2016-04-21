<?php
// Importazione stabili di parti comuni
require '../medoo.php';
require '../parti_comuni/stabili.php';

function stabile_uuid($db, $id)
{
    $retval='';
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
        echo 'Il sito sta avendo problemi...\n';
        echo "Errore: connessione MySQL fallita: \n";
        echo 'Errno: '.$db->connect_errno."\n";
        echo 'Error: '.$db->connect_error."\n";
        exit;
    } else {
        echo 'connessi a: '.$db->host_info."\n";
        $db->query('DROP DATABASE `'.$dbc['name'].';');
        $db->query('CREATE DATABASE IF NOT EXISTS `'.$dbc['name'].'` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;');
        $db->query('USE `'.$dbc['name'].'`;');
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

// Apertura parti_comuni
$dbPartiComuni = new medoo([
    'database_type' => 'mysql',
    'database_name' => $aDbPartiComuni['name'],
    'server' => $aDbPartiComuni['server'],
    'username' => $aDbPartiComuni['username'],
    'password' => $aDbPartiComuni['password'],
    'charset' => $aDbPartiComuni['charset'],
        ]);

/**
* parti_comuni
*/
require 'stabili.php';
stabiliCrea($dbCondom);
stabiliImporta($dbPartiComuni, $dbCondom);

require 'acea_contratti.php';
//aceaContrattiCrea($dbCondom);
//aceaContrattiImporta($dbPartiComuni, $dbCondom);

require 'acea_tariffe.php';
//aceaTariffeCrea($dbCondom);
//aceaTariffeImporta($dbPartiComuni, $dbCondom);


require 'affitti.php';
//affittiCrea($dbCondom);
//affittiImporta($dbPartiComuni, $dbCondom);

require 'bonifici.php';
//bonificiCrea($dbCondom);
//bonificiImporta($dbPartiComuni, $dbCondom);

require 'amministratori.php';
//amministratoriCrea($dbCondom);
//amministratoriImporta($dbPartiComuni, $dbCondom);

require 'conti.php';
//contiCrea($dbCondom);
//contiImporta($dbPartiComuni, $dbCondom);

require 'fatture.php';
//fattureCrea($dbCondom);
//fattureImporta($dbPartiComuni, $dbCondom);

require 'fatture_amministratore.php';
//fattureAmministratoreCrea($dbCondom);
//fattureAmministratoreImporta($dbPartiComuni, $dbCondom);

require 'fatture_multiple_dettaglio.php';
//fattureMultipleDettaglioCrea($dbCondom);
//fattureMultipleDettaglioImporta($dbPartiComuni, $dbCondom);

require 'ff24.php';
//ff24Crea($dbCondom);
//ff24Importa($dbPartiComuni, $dbCondom);

require 'fornitori.php';
//fornitoriCrea($dbCondom);
//fornitoriImporta($dbPartiComuni, $dbCondom);

require 'gruppi.php';
//gruppiCrea($dbCondom);
//gruppiImporta($dbPartiComuni, $dbCondom);

require 'interventi.php';
interventiCrea($dbCondom);
interventiImporta($dbPartiComuni, $dbCondom);


require 'operazioni.php';
//operazioniCrea($dbCondom);
//operazioniImporta($dbPartiComuni, $dbCondom);
