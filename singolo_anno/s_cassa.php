<?php

function s_cassaCreate($ds, $dd)
{
    $dbstring = 'drop table `s_cassa`;';
    echo "Creazione s_cassa; \r\n";
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
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function s_cassaCopy($ds, $dd)
{
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
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('s_cassa', $row);
    }
}
