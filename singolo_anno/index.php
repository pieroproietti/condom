<?php

require "../medoo.php";
require "amministratore.php";
require "anagr_casse.php";
require "assemblee.php";
require "comproprietari.php";
require "condomin.php";
require "condomini_totali.php";
require "consiglieri.php";
require "cre_deb_preced.php";
require "creaz_prev_stra.php";
require "descriz_rate.php";



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
  'name' => 'singolo_anno',
];

// creazione del database condom
dbCreate($dbc);

/**
*
*/
// in anni nome_dir è la directory per singolo_anno
$dbName = 'E:\Gescon\0008\0001\singolo_anno.mdb';
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

//amministratoreCreate($ds, $dd);
//amministratoreCopy($ds, $dd);
//anagr_casseCreate($ds, $dd);
//anagr_casseCopy($ds, $dd);
//assembleeCreate($ds, $dd);
//assembleeCopy($ds, $dd);
//comproprietariCreate($ds, $dd);
//comproprietariCopy($ds, $dd);
//condominCreate($ds, $dd);
//condominCopy($ds, $dd);
//condomini_totaliCreate($ds, $dd);
//condomini_totaliCopy($ds, $dd);
//consiglieriCreate($ds, $dd);
//consiglieriCopy($ds, $dd);
//cre_deb_precedCreate($ds, $dd);
//cre_deb_precedCopy($ds, $dd);
//creaz_prev_straCreate($ds, $dd);
//creaz_prev_straCopy($ds, $dd);
descriz_rateCreate($ds, $dd);
descriz_rateCopy($ds, $dd);
