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
require "elenco_destinatari_fax.php";
require "elenco_destinatari_rol.php";
require "elenco_destinatari_sms.php";
require "emes_det.php";
require "emes_gen.php";
require "inc_da_ec.php";
require "protoc_ec.php";
require "protoc_email.php";
require "protoc_fax.php";
require "protoc_rol.php";
require "protoc_sms.php";
require "registro_nomina_revoca_amm.php";
require "temp_dov.php";
require "temp_ricev.php";



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
if ($_GET['cartella']==''){
  die("devi passare il parametro cartella!");
}

$dbPath="E:\\gescon";
$dbFolder=$_GET['cartella'];
$dbFile="generale_stabile.mdb";
$dbName = $dbPath."\\".$dbFolder."\\".$dbFile;

if (!file_exists($dbName)) {
    die("Non riesco a trovare il database: $dbname");
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

acqua_dettCreate($ds, $dd);
acqua_dettCopy($ds,$dd);
acqua_dett_parzCreate($ds, $dd);
acqua_dett_parzCopy($ds, $dd);
acqua_fattureCreate($ds, $dd);
acqua_fattureCopy($ds, $dd);
acqua_genCreate($ds, $dd);
acqua_genCopy($ds, $dd);
anagr_casseCreate($ds, $dd);
anagr_casseCopy($ds, $dd);
anniCreate($ds, $dd);
anniCopy($ds, $dd);
corrisp_inviataCreate($ds, $dd);
corrisp_inviataCopy($ds, $dd);
elenco_destinatari_emailCreate($ds, $dd);
elenco_destinatari_emailCopy($ds, $dd);
elenco_destinatari_email1Create($ds, $dd);
elenco_destinatari_email1Copy($ds, $dd);
elenco_destinatari_faxCreate($ds, $dd);
elenco_destinatari_faxCopy($ds, $dd);
elenco_destinatari_rolCreate($ds, $dd);
elenco_destinatari_rolCopy($ds, $dd);
elenco_destinatari_smsCreate($ds, $dd);
elenco_destinatari_smsCopy($ds, $dd);
emes_detCreate($ds, $dd);
emes_detCopy($ds, $dd);
emes_genCreate($ds, $dd);
emes_genCopy($ds, $dd);
inc_da_ecCreate($ds, $dd);
inc_da_ecCopy($ds, $dd);
protoc_ecCreate($ds, $dd);
protoc_ecCopy($ds, $dd);
protoc_emailCreate($ds, $dd);
protoc_emailCopy($ds, $dd);
protoc_faxCreate($ds, $dd);
protoc_faxCopy($ds, $dd);
protoc_rolCreate($ds, $dd);
protoc_rolCopy($ds, $dd);
protoc_smsCreate($ds, $dd);
protoc_smsCopy($ds, $dd);
registro_nomina_revoca_ammCreate($ds, $dd);
registro_nomina_revoca_ammCopy($ds, $dd);
temp_dovCreate($ds, $dd);
temp_dovCopy($ds, $dd);
temp_ricevCreate($ds, $dd);
temp_ricevCopy($ds, $dd);
