<?php
namespace SingoloAnno;

function dett_tabCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/dett_tab; \r\n";

    $dbstring = 'drop table `dett_tab`;';
    echo "Creazione dett_tab; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `dett_tab` (
         `id` int(4) DEFAULT NULL,
         `cod_tab` varchar(6) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `cond_inquil` varchar(1) DEFAULT NULL,
         `mm` decimal(10,2) DEFAULT NULL,
         `prev` int(4) DEFAULT NULL,
         `prev_euro` decimal(10,2) DEFAULT NULL,
         `cons` int(4) DEFAULT NULL,
         `cons_euro` decimal(10,2) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `unico` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function dett_tabCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/dett_tabCopy; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'cod_tab, ';
    $sql .= 'id_cond, ';
    $sql .= 'cond_inquil, ';
    $sql .= 'mm, ';
    $sql .= 'prev, ';
    $sql .= 'prev_euro, ';
    $sql .= 'cons, ';
    $sql .= 'cons_euro, ';
    $sql .= 'n_stra, ';
    $sql .= 'unico ';
    $sql .= 'FROM dett_tab ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('dett_tab', $row);
    }
}
