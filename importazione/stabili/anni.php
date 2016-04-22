<?php

function anniCrea($dd)
{
    $sql = '
    CREATE TABLE `anni` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `anno_o` varchar(9) DEFAULT NULL,
      `anno_r` varchar(9) DEFAULT NULL,
      `cartella` varchar(4) DEFAULT NULL,
      `selez` varchar(1) DEFAULT NULL,
      `descr_selez` varchar(50) DEFAULT NULL,
      `ordinarie_dal` datetime DEFAULT NULL,
      `ordinarie_al` datetime DEFAULT NULL,
      `riscald_dal` datetime DEFAULT NULL,
      `riscald_al` datetime DEFAULT NULL,
      `ft_descriz_1` varchar(100) DEFAULT NULL,
      `ft_descriz_2` varchar(100) DEFAULT NULL,
      `ft_descriz_3` varchar(100) DEFAULT NULL,
      `ft_descriz_4` varchar(100) DEFAULT NULL,
      `ft_descriz_5` varchar(100) DEFAULT NULL,
      `ft_descriz_6` varchar(100) DEFAULT NULL,
      `ft_descriz_7` varchar(100) DEFAULT NULL,
      `ft_descriz_8` varchar(100) DEFAULT NULL,
      `ft_descriz_9` varchar(100) DEFAULT NULL,
      `ft_descriz_10` varchar(100) DEFAULT NULL,
      `ft_descriz_11` varchar(100) DEFAULT NULL,
      `ft_descriz_12` varchar(100) DEFAULT NULL,
      `ft_importo_1` decimal(10,2) DEFAULT NULL,
      `ft_importo_2` decimal(10,2) DEFAULT NULL,
      `ft_importo_3` decimal(10,2) DEFAULT NULL,
      `ft_importo_4` decimal(10,2) DEFAULT NULL,
      `ft_importo_5` decimal(10,2) DEFAULT NULL,
      `ft_importo_6` decimal(10,2) DEFAULT NULL,
      `ft_importo_7` decimal(10,2) DEFAULT NULL,
      `ft_importo_8` decimal(10,2) DEFAULT NULL,
      `ft_importo_9` decimal(10,2) DEFAULT NULL,
      `ft_importo_10` decimal(10,2) DEFAULT NULL,
      `ft_importo_11` decimal(10,2) DEFAULT NULL,
      `ft_importo_12` decimal(10,2) DEFAULT NULL,
      `ft_num_1` varchar(20) DEFAULT NULL,
      `ft_num_2` varchar(20) DEFAULT NULL,
      `ft_num_3` varchar(20) DEFAULT NULL,
      `ft_num_4` varchar(20) DEFAULT NULL,
      `ft_num_5` varchar(20) DEFAULT NULL,
      `ft_num_6` varchar(20) DEFAULT NULL,
      `ft_num_7` varchar(20) DEFAULT NULL,
      `ft_num_8` varchar(20) DEFAULT NULL,
      `ft_num_9` varchar(20) DEFAULT NULL,
      `ft_num_10` varchar(20) DEFAULT NULL,
      `ft_num_11` varchar(20) DEFAULT NULL,
      `ft_num_12` varchar(20) DEFAULT NULL,
      `ft_voce_compenso` varchar(3) DEFAULT NULL,
      `ft_voce_iva` varchar(3) DEFAULT NULL,
      `ft_voce_rda` varchar(3) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `anni` ADD PRIMARY KEY (`id`);
      ALTER TABLE `anni` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

  function anniImporta($ds, $dd,  $stabile_id, $stabile_uuid)
  {
      $table = 'anni';
      $columns = [
          'id_anno      (id)',
          'anno_o',
          'anno_r',
          'nome_dir     (cartella)',
          'selez',
          'descr_selez',
          'ordinarie_dal',
          'ordinarie_al',
          'riscald_dal',
          'riscald_al',
          'ft_descriz_1',
          'ft_descriz_2',
          'ft_descriz_3',
          'ft_descriz_4',
          'ft_descriz_5',
          'ft_descriz_6',
          'ft_descriz_7',
          'ft_descriz_8',
          'ft_descriz_9',
          'ft_descriz_10',
          'ft_descriz_11',
          'ft_descriz_12',
          'ft_importo_1',
          'ft_importo_2',
          'ft_importo_3',
          'ft_importo_4',
          'ft_importo_5',
          'ft_importo_6',
          'ft_importo_7',
          'ft_importo_8',
          'ft_importo_9',
          'ft_importo_10',
          'ft_importo_11',
          'ft_importo_12',
          'ft_num_1',
          'ft_num_2',
          'ft_num_3',
          'ft_num_4',
          'ft_num_5',
          'ft_num_6',
          'ft_num_7',
          'ft_num_8',
          'ft_num_9',
          'ft_num_10',
          'ft_num_11',
          'ft_num_12',
          'ft_voce_compenso',
          'ft_voce_iva',
          'ft_voce_rda',
        ];

      $anni = $ds->select($table, $columns);
      if (!empty($anni)) {
          foreach ($anni as &$anno) {
              $anno['stabile_id'] = $stabile_id;
              $anno['stabile_uuid'] = $stabile_uuid;
              $dd->insert('anni', $anno);
          }
      }
  }
