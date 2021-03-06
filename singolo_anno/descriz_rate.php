<?php
namespace SingoloAnno;

function descriz_rateCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/descriz_rate; \r\n";

    $dbstring = 'drop table `descriz_rate`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `descriz_rate` (
         `mese` varchar(2) DEFAULT NULL,
         `ordin` varchar(35) DEFAULT NULL,
         `risc` varchar(35) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function descriz_rateCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/descriz_rate; \r\n";

    $sql = 'SELECT ';
    $sql .= 'mese, ';
    $sql .= 'ordin, ';
    $sql .= 'risc ';
    $sql .= 'FROM descriz_rate ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('descriz_rate', $row);
    }
}
