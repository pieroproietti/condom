<?php

require "../medoo.php";
require "acqua_dett.php";
require "acqua_dett_parz.php";
require "acqua_fatture.php";
require "acqua_gen.php";
require "anagr_casse.php";
require "anni.php";
require "corrisp_inviata.php";
require "elenco_destinatari_email.php";
require "elenco_destinatari_email1.php";


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

/*
* main
*/
$dbc = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'generale_stabile',
];

// creazione del database condom
dbCreate($dbc);

/**
*
*/
// in anni nome_dir è la directory per singolo_anno
$dbName = 'E:\Gescon\0008\generale_stabile.mdb';
if (!file_exists($dbName)) {
    die("Could not find database file. Uffa!");
  }else{
    echo "$dbName trovato!<br/>";
  }
$ds = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");
// database destinazione


$dd = new medoo([
    'database_type' => 'mysql',
    'database_name' => $dbc['name'],
    'server' => $dbc['server'],
    'username' => $dbc['username'],
    'password' => $dbc['password'],
    'charset' => 'utf8'
        ]);

//acqua_dettCreate($ds, $dd);
//acqua_dettCopy($ds,$dd);
//acqua_dett_parzCreate($ds, $dd);
//acqua_dett_parzCopy($ds, $dd);
//acqua_fattureCreate($ds, $dd);
//acqua_fattureCopy($ds, $dd);
//acqua_genCreate($ds, $dd);
//acqua_genCopy($ds, $dd);
//anagr_casseCreate($ds, $dd);
//anagr_casseCopy($ds, $dd);
//anniCreate($ds, $dd);
//anniCopy($ds, $dd);
//corrisp_inviataCreate($ds, $dd);
//corrisp_inviataCopy($ds, $dd);
//elenco_destinatari_emailCreate($ds, $dd);
//elenco_destinatari_emailCopy($ds, $dd);
elenco_destinatari_email1Create($ds, $dd);
elenco_destinatari_email1Copy($ds, $dd);
