<?php

function anagr_casseCreate($ds, $dd)
{
    $dbstring = 'drop table `anagr_casse`;';
    echo "Creazione anagr_casse; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `anagr_casse` (
         `id_cassa` int(4) DEFAULT NULL,
         `codice` varchar(3) DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `saldo_iniziale` int(4) DEFAULT NULL,
         `saldo_iniziale_euro` decimal(10,2) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function anagr_casseCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_cassa, ';
    $sql .= 'codice, ';
    $sql .= 'descrizione, ';
    $sql .= 'saldo_iniziale, ';
    $sql .= 'saldo_iniziale_euro, ';
    $sql .= 'tipo_riga ';
    $sql .= 'FROM anagr_casse ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('anagr_casse', $row);
    }
}
