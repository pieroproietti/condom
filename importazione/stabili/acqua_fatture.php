<?php

function acquaFattureCrea($dd)
{
    $sql = '
    DROP TABLE IF EXISTS `acqua_fatture`;
    CREATE TABLE `acqua_fatture` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `rif_ute` int(2) DEFAULT NULL,
      `descriz_ft` varchar(150) DEFAULT NULL,
      `importo_ft` decimal(10,2) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `acqua_fatture` ADD PRIMARY KEY (`id`);
      ALTER TABLE `acqua_fatture` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

  function acquaFattureImporta($ds, $dd,  $stabile_id, $stabile_uuid)
  {
      $table = 'acqua_fatture';
      $columns = [
          'rif_ute',
          'descriz_ft',
          'importo_ft',
        ];

      $acquaFatture = $ds->select($table, $columns);
      if (!empty($acquaFatture)) {
          foreach ($acquaFatture as &$acquaFattura) {
              $acquaFattura['stabile_id'] = $stabile_id;
              $acquaFattura['stabile_uuid'] = $stabile_uuid;
              $dd->insert('acqua_fatture', $acquaFattura);
          }
      }
  }
