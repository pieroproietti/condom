<?php
require "acqua_dettagli.php";
require "acqua_fatture.php";
require "acqua_generali.php";

function generaleStabileImport($ds, $dd, $id, $uuid, $denominazione, $folder_stabile){
  acquaDettagliCrea($dd);
  acquaDettagliImporta($ds, $dd, $id, $uuid);

  acquaFattureCrea($dd);
  acquaFattureImporta($ds, $dd, $id, $uuid);

  acquaGeneraliCrea($dd);
  acquaGeneraliImporta($ds, $dd, $id, $uuid);


}
