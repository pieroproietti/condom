<?php

require '../medoo.php';
require 'amministratore.php';
require 'anagr_casse.php';
require 'assemblee.php';
require 'comproprietari.php';
require 'condomin.php';
require 'condomini_totali.php';
require 'consiglieri.php';
require 'cre_deb_preced.php';
require 'creaz_prev_stra.php';
require 'descriz_rate.php';
require 'dett_pers.php';
require 'dett_tab.php';
require 'foglio_riscossioni.php';
require 'fraz_dett.php';
require 'fraz_gen.php';
require 'giri_conti.php';
require 'incassi.php';
require 'note.php';
require 'operazioni.php';
require 'pertinenze.php';
require 'preced_dovuto.php';
require 'preced_pagato.php';
require 'pres_assemblee.php';
require 'prevent_straordinari.php';
require 'rate.php';
require 'rate_percentuali.php';
require 'rendite_condominiali.php';
require 'rendite_condominiali1.php';
require 'ripartizione.php';
require 'rubrica.php';
require 's_cassa.php';
require 'sistema.php';
require 'straordinarie.php';
require 'tabelle.php';
require 'temp_anteprima.php';
require 'temp_cassa.php';
require 'voc_spe.php';
require 'votazioni_dett.php';
require 'votazioni_gen.php';

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
  'name' => 'singolo_anno',
];

// creazione del database condom
dbCreate($dbc);

// in anni nome_dir è la directory per singolo_anno
$uuid = '';
if (isset($_GET['uuid'])) {
    $uuid = $_GET['uuid'];
}
$cartella = '';
if (isset($_GET['cartella'])) {
    $cartella = $_GET['cartella'];
}
$anno = '';
if (isset($_GET['anno'])) {
    $anno = $_GET['anno'];
}

if ($uuid == '') {
    echo '<br/>ATTENZIONE:';
    die($_SERVER['PHP_SELF'].': devi passare il parametro uuid!');
}
if ($cartella == '') {
    echo '<br/>ATTENZIONE:';
    die($_SERVER['PHP_SELF'].': devi passare il parametro cartella!');
}
if ($anno == '') {
    echo '<br/>ATTENZIONE:';
    die($_SERVER['PHP_SELF'].': devi passare il parametro anno!');
}

$dbPath = 'E:\\gescon';
$dbFolder = $_GET['cartella'].'\\'.$_GET['anno'];
$dbFile = 'singolo_anno.mdb';
$dbName = $dbPath.'\\'.$dbFolder.'\\'.$dbFile;

if (!file_exists($dbName)) {
    echo '<br/>ATTENZIONE:';
    die("Non riesco a trovare il database: $dbName");
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

amministratoreCreate($ds, $dd);
amministratoreCopy($ds, $dd);
anagr_casseCreate($ds, $dd);
anagr_casseCopy($ds, $dd);
assembleeCreate($ds, $dd);
assembleeCopy($ds, $dd);
comproprietariCreate($ds, $dd);
comproprietariCopy($ds, $dd);
condominCreate($ds, $dd);
condominCopy($ds, $dd);
condomini_totaliCreate($ds, $dd);
condomini_totaliCopy($ds, $dd);
consiglieriCreate($ds, $dd);
consiglieriCopy($ds, $dd);
cre_deb_precedCreate($ds, $dd);
cre_deb_precedCopy($ds, $dd);
creaz_prev_straCreate($ds, $dd);
creaz_prev_straCopy($ds, $dd);
descriz_rateCreate($ds, $dd);
descriz_rateCopy($ds, $dd);
dett_persCreate($ds, $dd);
dett_persCopy($ds, $dd);
dett_tabCreate($ds, $dd);
dett_tabCopy($ds, $dd);
foglio_riscossioniCreate($ds, $dd);
foglio_riscossioniCopy($ds, $dd);
fraz_dettCreate($ds, $dd);
fraz_dettCopy($ds, $dd);
fraz_genCreate($ds, $dd);
fraz_genCopy($ds, $dd);
giri_contiCreate($ds, $dd);
giri_contiCopy($ds, $dd);
incassiCreate($ds, $dd);
incassiCopy($ds, $dd);
notesCreate($ds, $dd);
notesCopy($ds, $dd);
operazioniCreate($ds, $dd);
operazioniCopy($ds, $dd);
pertinenzeCreate($ds, $dd);
pertinenzeCopy($ds, $dd);
preced_dovutoCreate($ds, $dd);
preced_dovutoCopy($ds, $dd);
preced_pagatoCreate($ds, $dd);
preced_pagatoCopy($ds, $dd);
pres_assembleeCreate($ds, $dd);
pres_assembleeCopy($ds, $dd);
prevent_straordinariCreate($ds, $dd);
prevent_straordinariCopy($ds, $dd);
rateCreate($ds, $dd);
rateCopy($ds, $dd);
rate_percentualiCreate($ds, $dd);
rate_percentualiCopy($ds, $dd);
rendite_condominialiCreate($ds, $dd);
rendite_condominialiCopy($ds, $dd);
rendite_condominiali1Create($ds, $dd);
rendite_condominiali1Copy($ds, $dd);
ripartizioneCreate($ds, $dd);
ripartizioneCopy($ds, $dd);
rubricaCreate($ds, $dd);
rubricaCopy($ds, $dd);
s_cassaCreate($ds, $dd);
s_cassaCopy($ds, $dd);
sistemaCreate($ds, $dd);
sistemaCopy($ds, $dd);
straordinarieCreate($ds, $dd);
straordinarieCopy($ds, $dd);
tabelleCreate($ds, $dd);
tabelleCopy($ds, $dd);
temp_anteprimaCreate($ds, $dd);
temp_anteprimaCopy($ds, $dd);
temp_cassaCreate($ds, $dd);
temp_cassaCopy($ds, $dd);
voc_speCreate($ds, $dd);
voc_speCopy($ds, $dd);
votazioni_dettCreate($ds, $dd);
votazioni_dettCopy($ds, $dd);
votazioni_genCreate($ds, $dd);
votazioni_genCopy($ds, $dd);
