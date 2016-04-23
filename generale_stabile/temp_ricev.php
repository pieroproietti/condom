<?php

function temp_ricevCreate($ds, $dd)
{
  echo "Creazione generale_stabile/temp_ricev; \r\n";
    $dbstring = 'drop table `temp_ricev`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `temp_ricev` (
         `raggruppamento` int(4) DEFAULT NULL,
         `n_ricevuta` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function temp_ricevCopy($ds, $dd)
{
  echo "Importazione da access di: temp_ricev in: generale_stabile/temp_ricev; \r\n";
    $sql = 'SELECT ';
    $sql .= 'raggruppamento, ';
    $sql .= 'n_ricevuta ';
    $sql .= 'FROM temp_ricev ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('temp_ricev', $row);
    }
}
