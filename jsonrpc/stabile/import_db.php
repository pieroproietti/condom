<?php

function importDbStabile($params)
{
  require_once '../../medoo.php';
  require_once '../../generale_stabile/acqua_dett.php';
  require_once '../../generale_stabile/acqua_dett_parz.php';
  require_once '../../generale_stabile/acqua_fatture.php';
  require_once '../../generale_stabile/acqua_gen.php';
  require_once '../../generale_stabile/anagr_casse.php';
  require_once '../../generale_stabile/anni.php';
  require_once '../../generale_stabile/corrisp_inviata.php';
  require_once '../../generale_stabile/elenco_destinatari_email.php';
  require_once '../../generale_stabile/elenco_destinatari_email1.php';
  require_once '../../generale_stabile/elenco_destinatari_fax.php';
  require_once '../../generale_stabile/elenco_destinatari_rol.php';
  require_once '../../generale_stabile/elenco_destinatari_sms.php';
  require_once '../../generale_stabile/emes_det.php';
  require_once '../../generale_stabile/emes_gen.php';
  require_once '../../generale_stabile/inc_da_ec.php';
  require_once '../../generale_stabile/protoc_ec.php';
  require_once '../../generale_stabile/protoc_email.php';
  require_once '../../generale_stabile/protoc_fax.php';
  require_once '../../generale_stabile/protoc_rol.php';
  require_once '../../generale_stabile/protoc_sms.php';
  require_once '../../generale_stabile/registro_nomina_revoca_amm.php';
  require_once '../../generale_stabile/temp_dov.php';
  require_once '../../generale_stabile/temp_ricev.php';

    $folder_stabile=$params['folder_stabile'];
    $dbName = "C:\\Gescon\\$folder_stabile\\generale_stabile.mdb";
    $ds = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");


    $dd = new medoo([
    'database_type' => 'mysql',
    'database_name' => $params['name'],
    'server' => $params['server'],
    'username' => $params['username'],
    'password' => $params['password'],
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

    return true;
}
