<?php

function descriz_rateCreate($ds, $dd)
{
    $dbstring = 'drop table `descriz_rate`;';
    echo "Creazione descriz_rate; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `descriz_rate` (
         `mese` varchar(2) DEFAULT NULL,
         `ordin` varchar(35) DEFAULT NULL,
         `risc` varchar(35) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function descriz_rateCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'mese, ';
    $sql .= 'ordin, ';
    $sql .= 'risc ';
    $sql .= 'FROM descriz_rate ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('descriz_rate', $row);
    }
}
