<?php

function prevent_straordinariCreate($ds, $dd)
{
    $dbstring = 'drop table `prevent_straordinari`;';
    echo "Creazione prevent_straordinari; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `prevent_straordinari` (
         `id` int(4) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `cod_spe` varchar(3) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function prevent_straordinariCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'n_stra, ';
    $sql .= 'cod_spe, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro ';
    $sql .= 'FROM prevent_straordinari ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('prevent_straordinari', $row);
    }
}
