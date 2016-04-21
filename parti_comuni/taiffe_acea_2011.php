<?php

function taiffe_acea_2011Create($ds, $dd)
{
    $dbstring = 'drop table `taiffe_acea_2011`;';
    echo "Creazione taiffe_acea_2011; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `taiffe_acea_2011` (
         `id_contratto` int(4) DEFAULT NULL,
         `codice` varchar(3) DEFAULT NULL,
         `descrizione` varchar(45) DEFAULT NULL,
         `mci` decimal(10,2) DEFAULT NULL,
         `mc_agevolati_da` decimal(10,2) DEFAULT NULL,
         `mc_agevolati_a` decimal(10,2) DEFAULT NULL,
         `tariffa_agevolata_euro` decimal(10,2) DEFAULT NULL,
         `mc_base_da` decimal(10,2) DEFAULT NULL,
         `mc_base_a` decimal(10,2) DEFAULT NULL,
         `tariffa_base_euro` decimal(10,2) DEFAULT NULL,
         `mc_1ecc_da` decimal(10,2) DEFAULT NULL,
         `mc_1ecc_a` decimal(10,2) DEFAULT NULL,
         `tariffa_1_euro` decimal(10,2) DEFAULT NULL,
         `mc_2ecc_da` decimal(10,2) DEFAULT NULL,
         `mc_2ecc_a` decimal(10,2) DEFAULT NULL,
         `tariffa_2_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_3_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_depurazione_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_fognature_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_contrib_solidarieta` decimal(10,2) DEFAULT NULL,
         `quota_fissa` decimal(10,2) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL,
         `periodo` varchar(6) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function taiffe_acea_2011Copy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_contratto, ';
    $sql .= 'codice, ';
    $sql .= 'descrizione, ';
    $sql .= 'mci, ';
    $sql .= 'mc_agevolati_da, ';
    $sql .= 'mc_agevolati_a, ';
    $sql .= 'tariffa_agevolata_euro, ';
    $sql .= 'mc_base_da, ';
    $sql .= 'mc_base_a, ';
    $sql .= 'tariffa_base_euro, ';
    $sql .= 'mc_1ecc_da, ';
    $sql .= 'mc_1ecc_a, ';
    $sql .= 'tariffa_1_euro, ';
    $sql .= 'mc_2ecc_da, ';
    $sql .= 'mc_2ecc_a, ';
    $sql .= 'tariffa_2_euro, ';
    $sql .= 'tariffa_3_euro, ';
    $sql .= 'tariffa_depurazione_euro, ';
    $sql .= 'tariffa_fognature_euro, ';
    $sql .= 'tariffa_contrib_solidarieta, ';
    $sql .= 'quota_fissa, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'periodo ';
    $sql .= 'FROM taiffe_acea_2011 ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('taiffe_acea_2011', $row);
    }
}
