<?php

require 'acqua_dettagli.php';
require 'acqua_fatture.php';
require 'acqua_generali.php';
require 'anni.php';
require 'comunicazioni.php';
require 'destinatari.php';
require 'bollette.php';
require 'bollette_det.php';
require 'estratti_conto.php';
require 'protocolli.php';


function generaleStabileCrea($dd)
{
    acquaDettagliCrea($dd);
    acquaFattureCrea($dd);
    acquaGeneraliCrea($dd);
    anniCrea($dd);
    comunicazioniCrea($dd);
    destinatariCrea($dd);
    bolletteCrea($dd);
    bolletteDetCrea($dd);
    estrattiContoCrea($dd);
    protocolliCrea($dd);
}

function generaleStabileImport($ds, $dd, $id, $uuid, $denominazione, $folder_stabile)
{
    // tested acquaDettagliImporta($ds, $dd, $id, $uuid);
    // tested acquaFattureImporta($ds, $dd, $id, $uuid);
    // tested acquaGeneraliImporta($ds, $dd, $id, $uuid);
    // tested anniImporta($ds, $dd, $id, $uuid);
    // tested comunicazioniImporta($ds, $dd, $id, $uuid);
    // tested destinatariImporta($ds, $dd, $id, $uuid);
    // tested bolletteImporta($ds, $dd, $id, $uuid);
    // tested bolletteDetImporta($ds, $dd, $id, $uuid);
    // tested estrattiContoImporta($ds, $dd, $id, $uuid);
    protocolliImporta($ds, $dd, $id, $uuid);

}
