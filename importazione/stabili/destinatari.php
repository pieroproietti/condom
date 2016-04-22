<?php

function destinatariCrea($dd)
{
    $sql = '
    CREATE TABLE `destinatari` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,

      `rif_lettera` int(4) DEFAULT NULL,
      `codice` int(4) DEFAULT NULL,
      `scala` varchar(20) DEFAULT NULL,
      `interno` varchar(20) DEFAULT NULL,
      `destinatario_nome` varchar(100) DEFAULT NULL,
      `destinatario_email` varchar(150) DEFAULT NULL,
      `destinatario_riga1` varchar(100) DEFAULT NULL,
      `destinatario_riga2` varchar(100) DEFAULT NULL,
      `destinatario_indirizzo` varchar(100) DEFAULT NULL,
      `destinatario_civico` varchar(100) DEFAULT NULL,
      `destinatario_cap` varchar(5) DEFAULT NULL,
      `destinatario_comune` varchar(100) DEFAULT NULL,
      `destinatario_cellulare` varchar(150) DEFAULT NULL,
      `selezionato` varchar(2) DEFAULT NULL,
      `c_i` varchar(1) DEFAULT NULL,
      `id_cond` int(4) DEFAULT NULL,
      `allegato_1_pers` varchar(150) DEFAULT NULL,
      `inviato` varchar(200) DEFAULT NULL,
      `importo` decimal(10,2) DEFAULT NULL,
      `selez_abituale` varchar(2) DEFAULT NULL,
      `allegato_4_pers` varchar(150) DEFAULT NULL,
      `id_compr` int(4) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `destinatari` ADD PRIMARY KEY (`id`);
      ALTER TABLE `destinatari` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';
      $dd->query($sql);
}

function destinatariImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
  destinatariImportaEmail($ds, $dd,  $stabile_id, $stabile_uuid);
  destinatariImportaFax($ds, $dd,  $stabile_id, $stabile_uuid);
  destinatariImportaRol($ds, $dd,  $stabile_id, $stabile_uuid);
  destinatariImportaSms($ds, $dd,  $stabile_id, $stabile_uuid);
}

function destinatariImportaSms($ds, $dd,  $stabile_id, $stabile_uuid)
{
  $table = 'elenco_destinatari_sms';
  $columns = [
    'rif_lettera',                                      //tutti
    'codice',                                           //tutti
    'scala',                                            //tutti
    'interno',                                          //tutti
    'nome_destinatario        (destinatario_nome)',     //tutti
    'email_destinatario       (destinatario_email)',    //tutti
    // 'destinatario_riga1',                               //rol
    // 'destinatario_riga2',                               //rol
    // 'indir_destinatario       (destinatario_indirizzo)',//rol
    // 'civ_destinatario         (destinatario_civico)',   //rol
    // 'cap_destinatario         (destinatario_cap)',      //rol
    // 'citta_destinatario       (destinatario_comune)'    //rol
    'cell_destinatario        (destinatario_cellulare)',//sms
    'selezionato',
    'c_i',
    'id_cond',
    'allegato_1_pers',
    'inviato',
    'importo',
    'selez_abituale',
    'allegato_4_pers',
    'id_compr'
  ];

  $destinatari = $ds->select($table, $columns);
  if (!empty($destinatari)) {
      foreach ($destinatari as &$destinatario) {
        $destinatario['stabile_id']=$stabile_id;
        $destinatario['stabile_uuid']=$stabile_uuid;
        $dd->insert('destinatari',$destinatario);
      }
  }
}



function   destinatariImportaRol($ds, $dd,  $stabile_id, $stabile_uuid)
{
  $table = 'elenco_destinatari_rol';
  $columns = [
    'rif_lettera',                                      //tutti
    'codice',                                           //tutti
    'scala',                                            //tutti
    'interno',                                          //tutti
    'nome_destinatario        (destinatario_nome)',     //tutti
    'email_destinatario       (destinatario_email)',    //tutti
    'destinatario_riga1',                               //rol
    'destinatario_riga2',                               //rol
    'indir_destinatario       (destinatario_indirizzo)',//rol
    'civ_destinatario         (destinatario_civico)',   //rol
    'cap_destinatario         (destinatario_cap)',      //rol
    'citta_destinatario       (destinatario_comune)',    //rol
    // 'cell_destinatario        (destinatario_cellulare)',//sms
    'selezionato',
    'c_i',
    'id_cond',
    'allegato_1_pers',
    'inviato',
    'importo',
    'selez_abituale',
    'allegato_4_pers',
    'id_compr'
  ];

  $destinatari = $ds->select($table, $columns);
  if (!empty($destinatari)) {
      foreach ($destinatari as &$destinatario) {
        $destinatario['stabile_id']=$stabile_id;
        $destinatario['stabile_uuid']=$stabile_uuid;
        $dd->insert('destinatari',$destinatario);
      }
  }
}

function   destinatariImportaFax($ds, $dd,  $stabile_id, $stabile_uuid)
{
  $table = 'elenco_destinatari_fax';
  $columns = [
    'rif_lettera',                                      //tutti
    'codice',                                           //tutti
    'scala',                                            //tutti
    'interno',                                          //tutti
    'nome_destinatario        (destinatario_nome)',     //tutti
    'email_destinatario       (destinatario_email)',    //tutti
    // 'destinatario_riga1',                               //rol
    // 'destinatario_riga2',                               //rol
    // 'indir_destinatario       (destinatario_indirizzo)',//rol
    // 'civ_destinatario         (destinatario_civico)',   //rol
    // 'cap_destinatario         (destinatario_cap)',      //rol
    // 'citta_destinatario       (destinatario_comune)'    //rol
    // 'cell_destinatario        (destinatario_cellulare)',//sms
    'selezionato',
    'c_i',
    'id_cond',
    'allegato_1_pers',
    'inviato',
    'importo',
    'selez_abituale',
    'allegato_4_pers',
    'id_compr'
  ];

  $destinatari = $ds->select($table, $columns);
  if (!empty($destinatari)) {
      foreach ($destinatari as &$destinatario) {
        $destinatario['stabile_id']=$stabile_id;
        $destinatario['stabile_uuid']=$stabile_uuid;
        $dd->insert('destinatari',$destinatario);
      }
  }
}

function destinatariImportaEmail($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'elenco_destinatari_email';
    $columns = [
      'rif_lettera',                                      //tutti
      'codice',                                           //tutti
      'scala',                                            //tutti
      'interno',                                          //tutti
      'nome_destinatario        (destinatario_nome)',     //tutti
      'email_destinatario       (destinatario_email)',    //tutti
      // 'destinatario_riga1',                               //rol
      // 'destinatario_riga2',                               //rol
      // 'indir_destinatario       (destinatario_indirizzo)',//rol
      // 'civ_destinatario         (destinatario_civico)',   //rol
      // 'cap_destinatario         (destinatario_cap)',      //rol
      // 'citta_destinatario       (destinatario_comune)'    //rol
      // 'cell_destinatario        (destinatario_cellulare)',//sms
      'selezionato',
      'c_i',
      'id_cond',
      'allegato_1_pers',
      'inviato',
      'importo',
      'selez_abituale',
      'allegato_4_pers',
      'id_compr'
    ];

    $destinatari = $ds->select($table, $columns);
    if (!empty($destinatari)) {
        foreach ($destinatari as &$destinatario) {
          $destinatario['stabile_id']=$stabile_id;
          $destinatario['stabile_uuid']=$stabile_uuid;
          $dd->insert('destinatari',$destinatario);
        }
    }
}
