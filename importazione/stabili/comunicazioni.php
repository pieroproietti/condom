<?php

function comunicazioniCrea($dd)
{
    $sql = '
    DROP TABLE IF EXISTS `comunicazioni`;

    CREATE TABLE `comunicazioni` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `protocollo` int(4) DEFAULT NULL,
      `tipo_documento` varchar(100) DEFAULT NULL,
      `data` datetime DEFAULT NULL,
      `forn_cond_altro` varchar(50) DEFAULT NULL,
      `codice` int(4) DEFAULT NULL,
      `destinatario` varchar(100) DEFAULT NULL,
      `oggetto` varchar(150) DEFAULT NULL,
      `lettera_tipo_caricata` varchar(100) DEFAULT NULL,
      `note` text DEFAULT NULL,
      `id_cond_for` int(4) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      -- ALTER TABLE `comunicazioni` ADD PRIMARY KEY (`id`);
      -- ALTER TABLE `comunicazioni` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

  function comunicazioniImporta($ds, $dd,  $stabile_id, $stabile_uuid)
  {
      $table = 'corrisp_inviata';
      $columns = [
          'id_corrisp     (id)',
          'protocollo',
          'tipo_documento',
          'data',
          'forn_cond_altro',
          'codice',
          'destinatario',
          'oggetto',
          'lettera_tipo_caricata',
          'note',
          'id_cond_for',
        ];

      $comunicazioni = $ds->select($table, $columns);
      if (!empty($comunicazioni)) {
          foreach ($comunicazioni as &$comunicazione) {
              $comunicazione['stabile_id'] = $stabile_id;
              $comunicazione['stabile_uuid'] = $stabile_uuid;
              $dd->insert('comunicazioni', $comunicazione);
          }
      }
  }
