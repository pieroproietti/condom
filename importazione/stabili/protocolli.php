<?php
function protocolliCrea($dd)
{
  echo "Creazione condom/protocolli\r\n";

    $sql = '
    DROP TABLE IF EXISTS `protocolli`;
    CREATE TABLE `protocolli` (';
    $sql.=' `id` int(11) NOT NULL,';
    $sql.=' `stabile_id` int(11) NOT NULL,';
    $sql.=' `stabile_uuid` varchar(36) NOT NULL,';
    $sql.=' `originale_id` int(4) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `protocollo_id` int(11) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `tipo_documento` varchar(100) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `data` datetime DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `forn_cond_altro` varchar(50) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `codice` int(4) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `destinatario` varchar(100) DEFAULT NULL,'; // sms rol fax ec mail
    $sql.=' `indir_mittente` varchar(150) DEFAULT NULL,'; //sms fax email
    $sql.=' `indir_destinatario` varchar(150) DEFAULT NULL,'; //sms rol fax email
    $sql.=' `oggetto` varchar(150) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `lettera_tipo_caricata` varchar(100) DEFAULT NULL,'; //sms rol fax ec mail
    $sql.=' `note` text DEFAULT NULL,'; //sms rol fax ec
    $sql.=' `destinatario_riga1` varchar(100) DEFAULT NULL,'; //rol
    $sql.=' `destinatario_riga2` varchar(100) DEFAULT NULL,'; //rol
    $sql.=' `civ_destinatario` varchar(100) DEFAULT NULL,'; //rol
    $sql.=' `cap_destinartario` varchar(5) DEFAULT NULL,';  //rol
    $sql.=' `citta_destinatario` varchar(100) DEFAULT NULL,'; //rol
    $sql.=' `spediz_effettuata` smallint DEFAULT NULL,'; //rol
    $sql.=' `nome_documento` varchar(50) DEFAULT NULL,'; //rol
    $sql.=' `alleg_1` varchar(150) DEFAULT NULL,'; //sms fax email
    $sql.=' `alleg_2` varchar(150) DEFAULT NULL,'; //sms fax email
    $sql.=' `alleg_3` varchar(150) DEFAULT NULL,'; //sms fax email
    $sql.=' `alleg_4` varchar(150) DEFAULT NULL,'; //fax ec email
    $sql.=' `scala` varchar(10) DEFAULT NULL,'; //sms fax ec email
    $sql.=' `interno` varchar(10) DEFAULT NULL,'; //sms fax ec email
    $sql.=' `inviata` smallint DEFAULT NULL,'; //sms fax email
    $sql.=' `c_i` varchar(1) DEFAULT NULL,'; //ec
    $sql.=' `nome` varchar(50) DEFAULT NULL,'; //ec
    $sql.=' `totale` decimal(10,2) DEFAULT NULL,'; //ec
    $sql.=' `nome_pdf` varchar(50) DEFAULT NULL'; //ec
    $sql.=') ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `protocolli` ADD PRIMARY KEY (`id`);
    ALTER TABLE `protocolli` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
    ';
  $dd->query($sql);
}

function protocolliImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
  echo "Importazione di\n\r";
  echo "- parti_comuni/prot_ec\n\r";
  echo "- parti_comuni/prot_email\n\r";
  echo "- parti_comuni/prot_fax\n\r";
  echo "- parti_comuni/prot_rol\n\r";
  echo "- parti_comuni/prot_sms\n\r";
  echo "in: condom/estratti_conto\n\r";
  
  protocolliEcImporta($ds, $dd,  $stabile_id, $stabile_uuid);
  protocolliEmailmporta($ds, $dd,  $stabile_id, $stabile_uuid);
  protocolliFaxImporta($ds, $dd,  $stabile_id, $stabile_uuid);
  protocolliRolImporta($ds, $dd,  $stabile_id, $stabile_uuid);
  protocolliSmsImporta($ds, $dd,  $stabile_id, $stabile_uuid);
}
function protocolliEcImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'protoc_ec';
    $columns = [
      'id_corrisp (originale_id)',
      'protocollo (protocollo_id)',  //sms rol fax ec mail
      'tipo_documento', //sms rol fax ec mail
      'data',  //sms rol fax ec mail
      'forn_cond_altro',  //sms rol fax ec mail
      'codice',  //sms rol fax ec mail
      'destinatario',  // sms rol fax ec mail
      // 'indir_mittente',  //sms fax email
      // 'indir_destinatario', ; //sms rol fax email
      'oggetto',  //sms rol fax ec mail
      'lettera_tipo_caricata',  //sms rol fax ec mail
      'note',  //sms rol fax ec
      // 'destinatario_riga1',  //rol
      // 'destinatario_riga2',  //rol
      // 'civ_destinatario',  //rol
      // 'cap_destinartario',   //rol
      // 'citta_destinatario',  //rol
      // 'spediz_effettuata',  //rol
      // 'nome_documento',  //rol
      // 'alleg_1', //sms fax email
      // 'alleg_2',  //sms fax email
      // 'alleg_3',  //sms fax email
      'alleg_4',  //fax ec email
      'scala',  //sms fax ec email
      'interno',  //sms fax ec email
      // 'inviata',  //sms fax email
      'c_i',  //ec
      'nome',  //ec
      'totale',  //ec
      'nome_pdf',  //ec
    ];

  $protocolli = $ds->select($table, $columns);
  if (!empty($protocolli)) {
      foreach ($protocolli as &$protocollo) {
          $protocollo['tipo_documento'] = 'Estratto conto';
          $protocollo['stabile_id'] = $stabile_id;
          $protocollo['stabile_uuid'] = $stabile_uuid;
          $dd->insert('protocolli', $protocollo);
      }
  }
}

function protocolliEmailmporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'protoc_email';
    $columns = [
      'id_corrisp (originale_id)',
      'protocollo (protocollo_id)',  //sms rol fax ec mail
      'tipo_documento', //sms rol fax ec mail
      'data',  //sms rol fax ec mail
      'forn_cond_altro',  //sms rol fax ec mail
      'codice',  //sms rol fax ec mail
      'destinatario',  // sms rol fax ec mail
      'indir_mittente',  //sms fax email
      'indir_destinatario',  //sms rol fax email
      'oggetto',  //sms rol fax ec mail
      'lettera_tipo_caricata',  //sms rol fax ec mail
      // 'note',  //sms rol fax ec
      // 'destinatario_riga1',  //rol
      // 'destinatario_riga2',  //rol
      // 'civ_destinatario',  //rol
      // 'cap_destinartario',   //rol
      // 'citta_destinatario',  //rol
      // 'spediz_effettuata',  //rol
      // 'nome_documento',  //rol
      'alleg_1', //sms fax email
      'alleg_2',  //sms fax email
      'alleg_3',  //sms fax email
      'alleg_4',  //fax ec email
      'scala',  //sms fax ec email
      'interno',  //sms fax ec email
      'inviata'  //sms fax email
      // 'c_i',  //ec
      // 'nome',  //ec
      // 'totale',  //ec
      // 'nome_pdf'  //ec
    ];

  $protocolli = $ds->select($table, $columns);
  if (!empty($protocolli)) {
      foreach ($protocolli as &$protocollo) {
          $protocollo['stabile_id'] = $stabile_id;
          $protocollo['stabile_uuid'] = $stabile_uuid;
          $dd->insert('protocolli', $protocollo);
      }
  }
}

function protocolliFaxImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'protoc_fax';
    $columns = [
      'id_corrisp (originale_id)',
      'protocollo (protocollo_id)',  //sms rol fax ec mail
      'tipo_documento', //sms rol fax ec mail
      'data',  //sms rol fax ec mail
      'forn_cond_altro',  //sms rol fax ec mail
      'codice',  //sms rol fax ec mail
      'destinatario',  // sms rol fax ec mail
      'indir_mittente',  //sms fax email
      'indir_destinatario',  //sms rol fax email
      'oggetto',  //sms rol fax ec mail
      'lettera_tipo_caricata',  //sms rol fax ec mail
      'note',  //sms rol fax ec
      // 'destinatario_riga1',  //rol
      // 'destinatario_riga2',  //rol
      // 'civ_destinatario',  //rol
      // 'cap_destinartario',   //rol
      // 'citta_destinatario',  //rol
      // 'spediz_effettuata',  //rol
      // 'nome_documento',  //rol
      'alleg_1', //sms fax email
      'alleg_2',  //sms fax email
      'alleg_3',  //sms fax email
      'alleg_4',  //fax ec email
      'scala',  //sms fax ec email
      'interno',  //sms fax ec email
      'inviata'  //sms fax email
      // 'c_i',  //ec
      // 'nome',  //ec
      // 'totale',  //ec
      // 'nome_pdf'  //ec
    ];

  $protocolli = $ds->select($table, $columns);
  if (!empty($protocolli)) {
      foreach ($protocolli as &$protocollo) {
          $protocollo['stabile_id'] = $stabile_id;
          $protocollo['stabile_uuid'] = $stabile_uuid;
          $dd->insert('protocolli', $protocollo);
      }
  }
}

function protocolliRolImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'protoc_rol';
    $columns = [
      'id_corrisp (originale_id)',
      'protocollo (protocollo_id)',  //sms rol fax ec mail
      'tipo_documento', //sms rol fax ec mail
      'data',  //sms rol fax ec mail
      'forn_cond_altro',  //sms rol fax ec mail
      'codice',  //sms rol fax ec mail
      'destinatario',  // sms rol fax ec mail
      // 'indir_mittente',  //sms fax email
      'indir_destinatario',  //sms rol fax email
      'oggetto',  //sms rol fax ec mail
      'lettera_tipo_caricata',  //sms rol fax ec mail
      'note',  //sms rol fax ec
      'destinatario_riga1',  //rol
      'destinatario_riga2',  //rol
      'civ_destinatario',  //rol
      'cap_destinartario',   //rol
      'citta_destinatario',  //rol
      'spediz_effettuata',  //rol
      'nome_documento',  //rol
      // 'alleg_1', //sms fax email
      // 'alleg_2',  //sms fax email
      // 'alleg_3',  //sms fax email
      // 'alleg_4',  //fax ec email
      // 'scala',  //sms fax ec email
      // 'interno',  //sms fax ec email
      'inviata',  //sms fax email
      'c_i',  //ec
      'nome',  //ec
      'totale',  //ec
      'nome_pdf'  //ec
    ];

  $protocolli = $ds->select($table, $columns);
  if (!empty($protocolli)) {
      foreach ($protocolli as &$protocollo) {
          $protocollo['stabile_id'] = $stabile_id;
          $protocollo['stabile_uuid'] = $stabile_uuid;
          $dd->insert('protocolli', $protocollo);
      }
  }
}

function protocolliSmsImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'protoc_sms';
    $columns = [
      'id_corrisp (originale_id)',
      'protocollo (protocollo_id)',  //sms rol fax ec mail
      'tipo_documento', //sms rol fax ec mail
      'data',  //sms rol fax ec mail
      'forn_cond_altro',  //sms rol fax ec mail
      'codice',  //sms rol fax ec mail
      'destinatario',  // sms rol fax ec mail
      'indir_mittente',  //sms fax email
      'indir_destinatario',  //sms rol fax email
      'oggetto',  //sms rol fax ec mail
      'lettera_tipo_caricata',  //sms rol fax ec mail
      'note',  //sms rol fax ec
      // 'destinatario_riga1',  //rol
      // 'destinatario_riga2',  //rol
      // 'civ_destinatario',  //rol
      // 'cap_destinartario',   //rol
      // 'citta_destinatario',  //rol
      // 'spediz_effettuata',  //rol
      // 'nome_documento',  //rol
      'alleg_1', //sms fax email
      'alleg_2',  //sms fax email
      'alleg_3',  //sms fax email
      // 'alleg_4',  //fax ec email
      'scala',  //sms fax ec email
      'interno',  //sms fax ec email
      'inviata'  //sms fax email
      // 'c_i',  //ec
      // 'nome',  //ec
      // 'totale',  //ec
      // 'nome_pdf'  //ec
    ];

  $protocolli = $ds->select($table, $columns);
  if (!empty($protocolli)) {
      foreach ($protocolli as &$protocollo) {
          $protocollo['stabile_id'] = $stabile_id;
          $protocollo['stabile_uuid'] = $stabile_uuid;
          $dd->insert('protocolli', $protocollo);
      }
  }
}
