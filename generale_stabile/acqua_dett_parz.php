<?php

function acqua_dett_parzCreate($ds, $dd)
{
    $dbstring = 'drop table `acqua_dett_parz`;';
    echo "Creazione acqua_dett_parz; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `acqua_dett_parz` (
         `rif_ute` int(2) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `cond_inquil` varchar(1) DEFAULT NULL,
         `t_cod_cond` int(2) DEFAULT NULL,
         `t_scala` varchar(10) DEFAULT NULL,
         `t_interno` varchar(10) DEFAULT NULL,
         `t_nome` varchar(50) DEFAULT NULL,
         `tipo_utenza` varchar(3) DEFAULT NULL,
         `num_utenze` int(2) DEFAULT NULL,
         `lett_vecchia_1` int(4) DEFAULT NULL,
         `lett_nuova_1` int(4) DEFAULT NULL,
         `lett_vecchia_2` int(4) DEFAULT NULL,
         `lett_nuova_2` int(4) DEFAULT NULL,
         `lett_vecchia_3` int(4) DEFAULT NULL,
         `lett_nuova_3` int(4) DEFAULT NULL,
         `consumo` int(4) DEFAULT NULL,
         `acq_personali` int(4) DEFAULT NULL,
         `acq_personali_euro` decimal(10,2) DEFAULT NULL,
         `alt1_personali` int(4) DEFAULT NULL,
         `alt1_personali_euro` decimal(10,2) DEFAULT NULL,
         `alt2_personali` int(4) DEFAULT NULL,
         `alt2_personali_euro` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function acqua_dett_parzCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'rif_ute, ';
    $sql .= 'id_cond, ';
    $sql .= 'cond_inquil, ';
    $sql .= 't_cod_cond, ';
    $sql .= 't_scala, ';
    $sql .= 't_interno, ';
    $sql .= 't_nome, ';
    $sql .= 'tipo_utenza, ';
    $sql .= 'num_utenze, ';
    $sql .= 'lett_vecchia_1, ';
    $sql .= 'lett_nuova_1, ';
    $sql .= 'lett_vecchia_2, ';
    $sql .= 'lett_nuova_2, ';
    $sql .= 'lett_vecchia_3, ';
    $sql .= 'lett_nuova_3, ';
    $sql .= 'consumo, ';
    $sql .= 'acq_personali, ';
    $sql .= 'acq_personali_euro, ';
    $sql .= 'alt1_personali, ';
    $sql .= 'alt1_personali_euro, ';
    $sql .= 'alt2_personali, ';
    $sql .= 'alt2_personali_euro ';
    $sql .= 'FROM acqua_dett_parz ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('acqua_dett_parz', $row);
    }
}

function acqua_dett_parzNormalize($stabile_uuid){
  $dbstring="ALTER TABLE `acqua_dett` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD `stabile_id` INT(11) NOT NULL AFTER `id`, ADD `stabile_uuid` VARCHAR(36) NOT NULL AFTER `stabile_id`, ADD PRIMARY KEY (`id`);";
}
