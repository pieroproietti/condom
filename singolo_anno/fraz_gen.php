<?php
namespace SingoloAnno;

function fraz_genCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/fraz_gen; \r\n";

    $dbstring = 'drop table `fraz_gen`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fraz_gen` (
         `progressivo` int(2) DEFAULT NULL,
         `cod_voce` varchar(3) DEFAULT NULL,
         `descriz_voce` varchar(80) DEFAULT NULL,
         `importo_voce` decimal(10,2) DEFAULT NULL,
         `spe` decimal(10,2) DEFAULT NULL,
         `ent` decimal(10,2) DEFAULT NULL,
         `deb` decimal(10,2) DEFAULT NULL,
         `cre` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fraz_genCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/fraz_gen; \r\n";

    $sql = 'SELECT ';
    $sql .= 'progressivo, ';
    $sql .= 'cod_voce, ';
    $sql .= 'descriz_voce, ';
    $sql .= 'importo_voce, ';
    $sql .= 'spe, ';
    $sql .= 'ent, ';
    $sql .= 'deb, ';
    $sql .= 'cre ';
    $sql .= 'FROM fraz_gen ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fraz_gen', $row);
    }
}
