<?php

require '../medoo.php';
require 'affitti.php';
require 'amministratore.php';
require 'bonifici.php';
require 'conti.php';
require 'contratti_acea.php';
require 'f24.php';
require 'fatt_multiple_dett.php';
require 'fatture.php';
require 'fatture_amministratore.php';
require 'fatture_provvisorie.php';
require 'fitti_dovuti.php';
require 'fitti_impostaz.php';
require 'fitti_pagamenti.php';
require 'fonts_firma.php';
require 'fornitori.php';
require 'frasi_pronte.php';
require 'gruppi.php';
require 'inc_reg_glo.php';
require 'interventi.php';
require 'operaz_ammin.php';
require 'scadenze.php';
require 'sistema.php';
require 'stabili.php';
require 'taiffe_acea_2011.php';
require 'tariffe_acea_standard.php';
require 'ut_p.php';
require 'utenti.php';

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
$dbc = [
  'server' => 'localhost',
  'username' => 'condom',
  'password' => 'condom',
  'name' => 'parti_comuni',
];

// creazione del database condom
dbCreate($dbc);

/*
*
*/
$dbName = "E:\Gescon\parti_comuni.mdb";
if (!file_exists($dbName)) {
    die('Could not find database file. Uffa!');
} else {
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
    'charset' => 'utf8',
        ]);

affittiCreate($ds, $dd);
affittiCopy($ds, $dd);
amministratoreCreate($ds, $dd);
amministratoreCopy($ds, $dd);
bonificiCreate($ds, $dd);
bonificiCopy($ds, $dd);
contiCreate($ds, $dd);
contiCopy($ds, $dd);
contratti_aceaCreate($ds, $dd);
contratti_aceaCopy($ds, $dd);
f24Create($ds, $dd);
f24Copy($ds, $dd);
fatt_multiple_dettCreate($ds, $dd);
fatt_multiple_dettCopy($ds, $dd);
fattureCreate($ds, $dd);
fattureCopy($ds, $dd);
fatture_amministratoreCreate($ds, $dd);
fatture_amministratoreCopy($ds, $dd);
fatture_provvisorieCreate($ds, $dd);
fatture_provvisorieCopy($ds, $dd);
fitti_dovutiCreate($ds, $dd);
fitti_dovutiCopy($ds, $dd);
fitti_impostazCreate($ds, $dd);
fitti_impostazCopy($ds, $dd);
fitti_pagamentiCreate($ds, $dd);
fitti_pagamentiCopy($ds, $dd);
fonts_firmaCreate($ds, $dd);
fonts_firmaCopy($ds, $dd);
fornitoriCreate($ds, $dd);
fornitoriCopy($ds, $dd);
frasi_pronteCreate($ds, $dd);
frasi_pronteCopy($ds, $dd);
gruppiCreate($ds, $dd);
gruppiCopy($ds, $dd);
inc_reg_gloCreate($ds, $dd);
inc_reg_gloCopy($ds, $dd);
interventiCreate($ds, $dd);
interventiCopy($ds, $dd);
operaz_amminCreate($ds, $dd);
operaz_amminCopy($ds, $dd);
scadenzeCreate($ds, $dd);
scadenzeCopy($ds, $dd);
sistemaCreate($ds, $dd);
sistemaCopy($ds, $dd);
stabiliCreate($ds, $dd);
stabiliCopy($ds, $dd);
taiffe_acea_2011Create($ds, $dd);
taiffe_acea_2011Copy($ds, $dd);
tariffe_acea_standardCreate($ds, $dd);
tariffe_acea_standardCopy($ds, $dd);
ut_pCreate($ds, $dd);
ut_pCopy($ds, $dd);
utentiCreate($ds, $dd);
utentiCopy($ds, $dd);
