<?php

function createDbStructureStabile($dbc)
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

    $ds=null;
    $dd = new medoo([
    'database_type' => 'mysql',
    'database_name' => $dbc['name'],
    'server' => $dbc['server'],
    'username' => $dbc['username'],
    'password' => $dbc['password'],
    'charset' => 'utf8',
        ]);

    acqua_dettCreate($ds, $dd);
    acqua_dett_parzCreate($ds, $dd);
    acqua_fattureCreate($ds, $dd);
    acqua_genCreate($ds, $dd);
    anagr_casseCreate($ds, $dd);
    anniCreate($ds, $dd);
    corrisp_inviataCreate($ds, $dd);
    elenco_destinatari_emailCreate($ds, $dd);
    elenco_destinatari_email1Create($ds, $dd);
    elenco_destinatari_faxCreate($ds, $dd);
    elenco_destinatari_rolCreate($ds, $dd);
    elenco_destinatari_smsCreate($ds, $dd);
    emes_detCreate($ds, $dd);
    emes_genCreate($ds, $dd);
    inc_da_ecCreate($ds, $dd);
    protoc_ecCreate($ds, $dd);
    protoc_emailCreate($ds, $dd);
    protoc_faxCreate($ds, $dd);
    protoc_rolCreate($ds, $dd);
    protoc_smsCreate($ds, $dd);
    registro_nomina_revoca_ammCreate($ds, $dd);
    temp_dovCreate($ds, $dd);
    temp_ricevCreate($ds, $dd);
}
