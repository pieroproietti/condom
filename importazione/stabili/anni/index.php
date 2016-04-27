<?php

require 'condomini.php';

function singoloAnnoCrea($dd)
{
    condominiCrea($dd);
}

function singoloAnnoImporta($ds, $dd, $id, $uuid, $denominazione, $folder_stabile, $folder_anno)
{
    condominiImporta($ds, $dd, $id, $uuid);
}
