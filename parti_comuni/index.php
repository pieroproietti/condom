<?php

require "../medoo.php";
require "affitti.php";
require "amministratore.php";
require "bonifici.php";
require "conti.php";
require "contratti_acea.php";
require "f24.php";
require "fatt_multiple_dett.php";

function dbCreate($dbc){
  $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);

  if ($db->connect_errno) {
      echo 'Il sito sta avendo problemi...\n';
      echo "Errore: connessione MySQL fallita: \n";
      echo 'Errno: '.$db->connect_errno."\n";
      echo 'Error: '.$db->connect_error."\n";
      exit;
  } else {
      echo "connessi a: ".$db->host_info."\n";
      $db->query("DROP DATABASE `".$dbc['name'].";");
      $db->query("CREATE DATABASE IF NOT EXISTS `".$dbc['name']."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");
      $db->query("USE `".$dbc['name']."`;");
      $db->close();
  }
}


/**
*
*/
$dbName = "E:\Gescon\parti_comuni.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
  }else{
    echo "$dbName trovato!<br/>";
  }
$ds = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");
// database destinazione

$dbc = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'condom',
];

// creazione del database budget-importing
dbCreate($dbc);

$dd = new medoo([
    'database_type' => 'mysql',
    'database_name' => $dbc['name'],
    'server' => $dbc['server'],
    'username' => $dbc['username'],
    'password' => $dbc['password'],
    'charset' => 'utf8'
        ]);

affittiCreate($ds, $dd);
affittiCopy($ds,$dd);
amministratoreCreate($ds, $dd);
amministratoreCopy($ds, $dd);
bonificiCreate($ds, $dd);
bonificiCopy($ds,$dd);
contiCreate($ds, $dd);
contiCopy($ds,$dd);
contrattiAceaCreate($ds, $dd);
contrattiAceaCopy($ds,$dd);
f24Create($ds, $dd);
f24Copy($ds,$dd);
fattMultipleDettCreate($ds, $dd);
fattMultipleDettCopy($ds, $dd);

echo "index.php";
?>
<!--
/*
"Affitti"
"Amministratore"
"Bonifici"
"Conti"
"Contratti_ACEA"
"F24"
"Fatt_Multiple_dett"
"Fatture"
"Fatture_amministratore"
"fatture_provvisorie"
"fitti_dovuti"
"Fitti_impostaz"
"Fitti_pagamenti"
"fonts_firma"
"Fornitori"
"Frasi_pronte"
"Gruppi"
"Inc_reg_glo"
"Interventi"
"operaz_ammin"
"Scadenze"
"Sistema"
"Stabili"
"Taiffe_ACEA_2011"
"Tariffe_ACEA_Standard"
"ut_p"
"Utenti"
*/
-->
