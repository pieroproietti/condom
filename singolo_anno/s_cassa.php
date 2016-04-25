<?php
namespace SingoloAnno;

function s_cassaCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/s_cassa; \r\n";

    $dbstring = 'drop table `s_cassa`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `s_cassa` (
         `id` int(4) DEFAULT NULL,
         `s_ordin` int(4) DEFAULT NULL,
         `s_ordin_euro` decimal(10,2) DEFAULT NULL,
         `s_riscald` int(4) DEFAULT NULL,
         `s_riscald_euro` decimal(10,2) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `s_straord` int(4) DEFAULT NULL,
         `s_straord_euro` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function s_cassaCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/s_cassa; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 's_ordin, ';
    $sql .= 's_ordin_euro, ';
    $sql .= 's_riscald, ';
    $sql .= 's_riscald_euro, ';
    $sql .= 'n_stra, ';
    $sql .= 's_straord, ';
    $sql .= 's_straord_euro ';
    $sql .= 'FROM s_cassa ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('s_cassa', $row);
    }
}
