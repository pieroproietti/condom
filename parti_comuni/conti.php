<?php

function contiCreate($ds, $dd)
{
    $dbstring = 'drop table `conti`;';
    echo "Creazione conti; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `conti` (
         `id` int(4) DEFAULT NULL,
         `id_gruppo` int(4) DEFAULT NULL,
         `cod_conto` varchar(3) DEFAULT NULL,
         `descrizione_conto` varchar(50) DEFAULT NULL,
         `totale_conto` decimal(10,2) DEFAULT NULL,
         `num_operazioni` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function contiCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'id_gruppo, ';
    $sql .= 'cod_conto, ';
    $sql .= 'descrizione_conto, ';
    $sql .= 'totale_conto, ';
    $sql .= 'num_operazioni ';
    $sql .= 'FROM conti ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('conti', $row);
    }
}
