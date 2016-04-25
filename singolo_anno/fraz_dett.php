<?php
namespace SingoloAnno;

function fraz_dettCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/fraz_dett; \r\n";

    $dbstring = 'drop table `fraz_dett`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fraz_dett` (
         `rif_progressivo` int(2) DEFAULT NULL,
         `cod_voce` varchar(3) DEFAULT NULL,
         `parte` decimal(10,2) DEFAULT NULL,
         `importo_parte` decimal(10,2) DEFAULT NULL,
         `spe_parte` decimal(10,2) DEFAULT NULL,
         `ent_parte` decimal(10,2) DEFAULT NULL,
         `deb_parte` decimal(10,2) DEFAULT NULL,
         `cre_parte` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fraz_dettCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/fraz_dett; \r\n";

    $sql = 'SELECT ';
    $sql .= 'rif_progressivo, ';
    $sql .= 'cod_voce, ';
    $sql .= 'parte, ';
    $sql .= 'importo_parte, ';
    $sql .= 'spe_parte, ';
    $sql .= 'ent_parte, ';
    $sql .= 'deb_parte, ';
    $sql .= 'cre_parte ';
    $sql .= 'FROM fraz_dett ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fraz_dett', $row);
    }
}
