<?php

function acqua_dettCreate($ds, $dd)
{
    $dbstring = 'drop table `acqua_dett`;';
    echo "Creazione acqua_dett;";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `acqua_dett` (
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
         `alt2_personali_euro` decimal(10,2) DEFAULT NULL,
         `cons_1` int(4) DEFAULT NULL,
         `cons_2` int(4) DEFAULT NULL,
         `cons_3` int(4) DEFAULT NULL,
         `cons_4` int(4) DEFAULT NULL,
         `cons_5` int(4) DEFAULT NULL,
         `importo_1` int(4) DEFAULT NULL,
         `importo_2` int(4) DEFAULT NULL,
         `importo_3` int(4) DEFAULT NULL,
         `importo_4` int(4) DEFAULT NULL,
         `importo_5` int(4) DEFAULT NULL,
         `acq_a_consumo` int(4) DEFAULT NULL,
         `alt1_a_consumo` int(4) DEFAULT NULL,
         `alt2_a_consumo` int(4) DEFAULT NULL,
         `acq_a_millesimi` int(4) DEFAULT NULL,
         `alt1_a_millesimi` int(4) DEFAULT NULL,
         `alt2_a_millesimi` int(4) DEFAULT NULL,
         `importo_depurazione` int(4) DEFAULT NULL,
         `importo_fognature` int(4) DEFAULT NULL,
         `acq_uguali` int(4) DEFAULT NULL,
         `alt1_uguali` int(4) DEFAULT NULL,
         `alt2_uguali` int(4) DEFAULT NULL,
         `differenza_acqua` int(4) DEFAULT NULL,
         `iva` int(4) DEFAULT NULL,
         `quota_letture` int(4) DEFAULT NULL,
         `tipo_lettura` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
}

function acqua_dettCopy($ds, $dd)
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
    $sql .= 'alt2_personali_euro, ';
    $sql .= 'cons_1, ';
    $sql .= 'cons_2, ';
    $sql .= 'cons_3, ';
    $sql .= 'cons_4, ';
    $sql .= 'cons_5, ';
    $sql .= 'importo_1, ';
    $sql .= 'importo_2, ';
    $sql .= 'importo_3, ';
    $sql .= 'importo_4, ';
    $sql .= 'importo_5, ';
    $sql .= 'acq_a_consumo, ';
    $sql .= 'alt1_a_consumo, ';
    $sql .= 'alt2_a_consumo, ';
    $sql .= 'acq_a_millesimi, ';
    $sql .= 'alt1_a_millesimi, ';
    $sql .= 'alt2_a_millesimi, ';
    $sql .= 'importo_depurazione, ';
    $sql .= 'importo_fognature, ';
    $sql .= 'acq_uguali, ';
    $sql .= 'alt1_uguali, ';
    $sql .= 'alt2_uguali, ';
    $sql .= 'differenza_acqua, ';
    $sql .= 'iva, ';
    $sql .= 'quota_letture, ';
    $sql .= 'tipo_lettura ';
    $sql .= 'FROM acqua_dett ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('acqua_dett', $row);
    }
}
