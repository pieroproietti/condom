<?php
require 'condomini.php';


function anniStabileCrea($dd)
{
  condominiCrea($dd);
}

function anniStabileImport($ds, $dd, $id, $uuid, $denominazione, $folder_stabile)
{
  condominiImporta($ds, $dd, $id, $uuid);
}
