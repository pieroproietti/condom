<?php

function scadenzeCreate($ds, $dd)
{
    $dbstring = 'drop table `scadenze`;';
    echo "Creazione scadenze; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `scadenze` (
         `id_scadenza` int(4) DEFAULT NULL,
         `dt_scadenza` datetime DEFAULT NULL,
         `ora_scadenza` varchar(5) DEFAULT NULL,
         `cod_stabile` int(2) DEFAULT NULL,
         `descriz_sintetica` varchar(100) DEFAULT NULL,
         `descriz_lunga` text DEFAULT NULL,
         `num_assemblea` int(2) DEFAULT NULL,
         `gest_ors` varchar(1) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `anno` varchar(9) DEFAULT NULL,
         `rata` varchar(2) DEFAULT NULL,
         `fatto` varchar(2) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL,
         `natura` varchar(1) DEFAULT NULL,
         `rif_f24` int(4) DEFAULT NULL,
         `importo_f24` decimal(10,2) DEFAULT NULL,
         `richiede_pop_up` varchar(2) DEFAULT NULL,
         `gg_anticipo` int(2) DEFAULT NULL,
         `pop_up_dal` datetime DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function scadenzeCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_scadenza, ';
    $sql .= 'dt_scadenza, ';
    $sql .= 'ora_scadenza, ';
    $sql .= 'cod_stabile, ';
    $sql .= 'descriz_sintetica, ';
    $sql .= 'descriz_lunga, ';
    $sql .= 'num_assemblea, ';
    $sql .= 'gest_ors, ';
    $sql .= 'n_stra, ';
    $sql .= 'anno, ';
    $sql .= 'rata, ';
    $sql .= 'fatto, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'natura, ';
    $sql .= 'rif_f24, ';
    $sql .= 'importo_f24, ';
    $sql .= 'richiede_pop_up, ';
    $sql .= 'gg_anticipo, ';
    $sql .= 'pop_up_dal ';
    $sql .= 'FROM scadenze ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('scadenze', $row);
    }
}
