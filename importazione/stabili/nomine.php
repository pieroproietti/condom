<?php
function nomineCrea($dd)
{
    $sql = '
    DROP TABLE IF EXISTS `nomine`;

    CREATE TABLE `nomine` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `amministratore` varchar(150) DEFAULT NULL,
      `inizio_del` datetime DEFAULT NULL,
      `inizio_note` varchar(100) DEFAULT NULL,
      `fine_del` datetime DEFAULT NULL,
      `fine_note` varchar(100) DEFAULT NULL,
      `nomina` varchar(100) DEFAULT NULL,
      `revoca` varchar(100) DEFAULT NULL)
      ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `nomine` ADD PRIMARY KEY (`id`);
      ALTER TABLE `nomine` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

function nomineImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    $table = 'registro_nomina_revoca.amm';
    $columns = [
      'dt_inizio              (inizio_del)',
      'modo_inizio            (inizio_note)'.
      'nome_amministratore    (amministratore)',
      'modo_fine              (fine_note)',
      'dt_fine                (termine_del)',
      'provv_trib_nomina      (nomina)',
      'provv_trib_revoca      (revoca)'
    ];

  $nomine = $ds->select($table, $columns);
  if (!empty($nomine)) {
      foreach ($nomine as &$nomina) {
          $nomina['stabile_id'] = $stabile_id;
          $nomina['stabile_uuid'] = $stabile_uuid;
          $dd->insert('estratti_conto', $estrattiConto);
      }
  }
}
