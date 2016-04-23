<?php

function contratti_aceaCreate($ds, $dd)
{
    $dbstring = 'drop table `contratti_acea`;';
    echo "Creazione parti_comuni/contratti_acea; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `contratti_acea` (
         `id_contratto` int(4) DEFAULT NULL,
         `codice` varchar(3) DEFAULT NULL,
         `descrizione` varchar(45) DEFAULT NULL,
         `mc_agevolati` decimal(10,2) DEFAULT NULL,
         `tariffa_agevolata` int(4) DEFAULT NULL,
         `tariffa_agevolata_euro` decimal(10,2) DEFAULT NULL,
         `mc_base` decimal(10,2) DEFAULT NULL,
         `tariffa_base` int(4) DEFAULT NULL,
         `tariffa_base_euro` decimal(10,2) DEFAULT NULL,
         `mc_1` decimal(10,2) DEFAULT NULL,
         `tariffa_1` int(4) DEFAULT NULL,
         `tariffa_1_euro` decimal(10,2) DEFAULT NULL,
         `mc_2` decimal(10,2) DEFAULT NULL,
         `tariffa_2` int(4) DEFAULT NULL,
         `tariffa_2_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_3` int(4) DEFAULT NULL,
         `tariffa_3_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_depurazione` int(4) DEFAULT NULL,
         `tariffa_depurazione_euro` decimal(10,2) DEFAULT NULL,
         `tariffa_fognature` int(4) DEFAULT NULL,
         `tariffa_fognature_euro` decimal(10,2) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function contratti_aceaCopy($ds, $dd)
{
  echo "Importazione da access di: parti_comuni/contratti_acea;\n\r";

    $sql = 'SELECT ';
    $sql .= 'id_contratto, ';
    $sql .= 'codice, ';
    $sql .= 'descrizione, ';
    $sql .= 'mc_agevolati, ';
    $sql .= 'tariffa_agevolata, ';
    $sql .= 'tariffa_agevolata_euro, ';
    $sql .= 'mc_base, ';
    $sql .= 'tariffa_base, ';
    $sql .= 'tariffa_base_euro, ';
    $sql .= 'mc_1, ';
    $sql .= 'tariffa_1, ';
    $sql .= 'tariffa_1_euro, ';
    $sql .= 'mc_2, ';
    $sql .= 'tariffa_2, ';
    $sql .= 'tariffa_2_euro, ';
    $sql .= 'tariffa_3, ';
    $sql .= 'tariffa_3_euro, ';
    $sql .= 'tariffa_depurazione, ';
    $sql .= 'tariffa_depurazione_euro, ';
    $sql .= 'tariffa_fognature, ';
    $sql .= 'tariffa_fognature_euro, ';
    $sql .= 'tipo_riga ';
    $sql .= 'FROM contratti_acea ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('contratti_acea', $row);
    }
}
