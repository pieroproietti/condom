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
require 'nomine.php';


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
    nomineCrea($dd);
}

function generaleStabileImport($ds, $dd, $id, $uuid, $denominazione, $folder_stabile)
{
    acquaDettagliImporta($ds, $dd, $id, $uuid);
    acquaFattureImporta($ds, $dd, $id, $uuid);
    acquaGeneraliImporta($ds, $dd, $id, $uuid);
    anniImporta($ds, $dd, $id, $uuid);
    comunicazioniImporta($ds, $dd, $id, $uuid);
    destinatariImporta($ds, $dd, $id, $uuid);
    bolletteImporta($ds, $dd, $id, $uuid);
    bolletteDetImporta($ds, $dd, $id, $uuid);
    estrattiContoImporta($ds, $dd, $id, $uuid);
    protocolliImporta($ds, $dd, $id, $uuid);
    nomineImporta($ds, $dd, $id, $uuid);

}
