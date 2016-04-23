<?php

function anagr_casseCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/anagr_casse; \r\n";

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
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function anagr_casseCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/anagr_casse; \r\n";
    $sql = 'SELECT ';
    $sql .= 'id_cassa, ';
    $sql .= 'codice, ';
    $sql .= 'descrizione, ';
    $sql .= 'saldo_iniziale, ';
    $sql .= 'saldo_iniziale_euro, ';
    $sql .= 'tipo_riga ';
    $sql .= 'FROM anagr_casse ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('anagr_casse', $row);
    }
}
