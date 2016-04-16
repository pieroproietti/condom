<?php

function registro_nomina_revoca_ammCreate($ds, $dd)
{
    $dbstring = 'drop table `registro_nomina_revoca_amm`;';
    echo "Creazione registro_nomina_revoca_amm; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `registro_nomina_revoca_amm` (
         `dt_inizio` datetime DEFAULT NULL,
         `modo_inizio` varchar(100) DEFAULT NULL,
         `nome_amministratore` varchar(150) DEFAULT NULL,
         `modo_fine` varchar(100) DEFAULT NULL,
         `dt_fine` datetime DEFAULT NULL,
         `provv_trib_nomina` varchar(100) DEFAULT NULL,
         `provv_trib_revoca` varchar(100) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function registro_nomina_revoca_ammCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'dt_inizio, ';
    $sql .= 'modo_inizio, ';
    $sql .= 'nome_amministratore, ';
    $sql .= 'modo_fine, ';
    $sql .= 'dt_fine, ';
    $sql .= 'provv_trib_nomina, ';
    $sql .= 'provv_trib_revoca ';
    $sql .= 'FROM registro_nomina_revoca_amm ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('registro_nomina_revoca_amm', $row);
    }
}
