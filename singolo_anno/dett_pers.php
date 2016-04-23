<?php

function dett_persCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/dett_pers; \r\n";

    $dbstring = 'drop table `dett_pers`;';
    echo "Creazione dett_pers; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `dett_pers` (
         `tipo_gestione` varchar(1) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `n_spe` int(2) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `cond_inq` varchar(1) DEFAULT NULL,
         `importo` int(4) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL,
         `unico` int(4) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `natura2` varchar(7) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function dett_persCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/dett_pers; \r\n";
  
    $sql = 'SELECT ';
    $sql .= 'tipo_gestione, ';
    $sql .= 'n_stra, ';
    $sql .= 'n_spe, ';
    $sql .= 'id_cond, ';
    $sql .= 'cond_inq, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro, ';
    $sql .= 'unico, ';
    $sql .= 'tabella, ';
    $sql .= 'natura2 ';
    $sql .= 'FROM dett_pers ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('dett_pers', $row);
    }
}
