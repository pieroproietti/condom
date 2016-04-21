<?php


function partiComuniImport($dbPartiComuni, $dbCondom)
{
    require 'stabili.php';
    stabiliCrea($dbCondom);
    stabiliImporta($dbPartiComuni, $dbCondom);

    require 'acea_contratti.php';
    aceaContrattiCrea($dbCondom);
    aceaContrattiImporta($dbPartiComuni, $dbCondom);

    require 'acea_tariffe.php';
    aceaTariffeCrea($dbCondom);
    aceaTariffeImporta($dbPartiComuni, $dbCondom);

    require 'affitti.php';
    affittiCrea($dbCondom);
    affittiImporta($dbPartiComuni, $dbCondom);

    require 'bonifici.php';
    bonificiCrea($dbCondom);
    bonificiImporta($dbPartiComuni, $dbCondom);

    require 'amministratori.php';
    amministratoriCrea($dbCondom);
    amministratoriImporta($dbPartiComuni, $dbCondom);

    require 'conti.php';
    contiCrea($dbCondom);
    contiImporta($dbPartiComuni, $dbCondom);

    require 'fatture.php';
    fattureCrea($dbCondom);
    fattureImporta($dbPartiComuni, $dbCondom);

    require 'fatture_amministratore.php';
    fattureAmministratoreCrea($dbCondom);
    fattureAmministratoreImporta($dbPartiComuni, $dbCondom);

    require 'fatture_multiple_dettaglio.php';
    fattureMultipleDettaglioCrea($dbCondom);
    fattureMultipleDettaglioImporta($dbPartiComuni, $dbCondom);

    require 'ff24.php';
    ff24Crea($dbCondom);
    ff24Importa($dbPartiComuni, $dbCondom);

    require 'fornitori.php';
    fornitoriCrea($dbCondom);
    fornitoriImporta($dbPartiComuni, $dbCondom);

    require 'frasi.php';
    frasiCrea($dbCondom);
    frasiImporta($dbPartiComuni, $dbCondom);

    require 'gruppi.php';
    gruppiCrea($dbCondom);
    gruppiImporta($dbPartiComuni, $dbCondom);

    require 'interventi.php';
    interventiCrea($dbCondom);
    interventiImporta($dbPartiComuni, $dbCondom);

    require 'operazioni.php';
    operazioniCrea($dbCondom);
    operazioniImporta($dbPartiComuni, $dbCondom);

    require 'scadenze.php';
    scadenzeCrea($dbCondom);
    scadenzeImporta($dbPartiComuni, $dbCondom);
}
