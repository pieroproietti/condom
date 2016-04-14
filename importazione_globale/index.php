<?php
// Importazione stabili di parti comuni
require "../meedoo.php";
require "../parti_comuni/stabili.php";


function dbCreate($dbc){
  $db = new mysqli($aDbCondom['server'], $aDbCondom['username'], $aDbCondom['password']);
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
$aDbCondom = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'condom'
];

$aDbPartiComuni = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'parti_comuni',
  'charset' => 'utf8'
];

$aDbGeneraleStabile = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'generale_stabile',
  'charset' => 'utf8'
];

$aDbSingoloAnno = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'singolo_anno',
  'charset' => 'utf8'
];


// creazione del database condom
dbCreate($dbc);


// Database di destinazione
$dbCondom = new medoo([
    'database_type' => 'mysql',
    'database_name' => $aDbCondom['name'],
    'server' => $aDbCondom['server'],
    'username' => $aDbCondom['username'],
    'password' => $aDbCondom['password'],
    'charset' => $aDbCondom['charset']
        ]);

// Apertura parti_comuni
$dbPartiComuni = new medoo([
    'database_type' => 'mysql',
    'database_name' => $aDbPartiComuni['name'],
    'server' => $aDbPartiComuni['server'],
    'username' => $aDbPartiComuni['username'],
    'password' => $aDbPartiComuni['password'],
    'charset' => $aDbPartiComuni['charset']
        ]);




 ?>
