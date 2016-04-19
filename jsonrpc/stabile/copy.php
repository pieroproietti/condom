<?php

function copyStabile($dbc, $id, $uuid, $folder_stabile);
{
    require '../../medoo.php';
    require '../../generale_stabile/acqua_dett.php';
    require '../../generale_stabile/acqua_dett_parz.php';
    require '../../generale_stabile/acqua_fatture.php';
    require '../../generale_stabile/acqua_gen.php';
    require '../../generale_stabile/anagr_casse.php';
    require '../../generale_stabile/anni.php';
    require '../../generale_stabile/corrisp_inviata.php';
    require '../../generale_stabile/elenco_destinatari_email.php';
    require '../../generale_stabile/elenco_destinatari_email1.php';
    require '../../generale_stabile/elenco_destinatari_fax.php';
    require '../../generale_stabile/elenco_destinatari_rol.php';
    require '../../generale_stabile/elenco_destinatari_sms.php';
    require '../../generale_stabile/emes_det.php';
    require '../../generale_stabile/emes_gen.php';
    require '../../generale_stabile/inc_da_ec.php';
    require '../../generale_stabile/protoc_ec.php';
    require '../../generale_stabile/protoc_email.php';
    require '../../generale_stabile/protoc_fax.php';
    require '../../generale_stabile/protoc_rol.php';
    require '../../generale_stabile/protoc_sms.php';
    require '../../generale_stabile/registro_nomina_revoca_amm.php';
    require '../../generale_stabile/temp_dov.php';
    require '../../generale_stabile/temp_ricev.php';

    $folder_stabile='0008';
    $dbName = "C:\\Gescon\\$folder_stabile\\generale_stabile.mdb";
    $ds = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");

    $dd = new medoo([
    'database_type' => 'mysql',
    'database_name' => $dbc['name'],
    'server' => $dbc['server'],
    'username' => $dbc['username'],
    'password' => $dbc['password'],
    'charset' => 'utf8',
        ]);

    acqua_dettCopy($ds, $dd);
    acqua_dett_parzCopy($ds, $dd);
    acqua_fattureCopy($ds, $dd);
    acqua_genCopy($ds, $dd);
    anagr_casseCopy($ds, $dd);
    anniCopy($ds, $dd);
    corrisp_inviataCopy($ds, $dd);
    elenco_destinatari_emailCopy($ds, $dd);
    elenco_destinatari_email1Copy($ds, $dd);
    elenco_destinatari_faxCopy($ds, $dd);
    elenco_destinatari_rolCopy($ds, $dd);
    elenco_destinatari_smsCopy($ds, $dd);
    emes_detCopy($ds, $dd);
    emes_genCopy($ds, $dd);
    inc_da_ecCopy($ds, $dd);
    protoc_ecCopy($ds, $dd);
    protoc_emailCopy($ds, $dd);
    protoc_faxCopy($ds, $dd);
    protoc_rolCopy($ds, $dd);
    protoc_smsCopy($ds, $dd);
    registro_nomina_revoca_ammCopy($ds, $dd);
    temp_dovCopy($ds, $dd);
    temp_ricevCopy($ds, $dd);
    return $dbName;
}
