<?php

function pertinenzeCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/pertinenze; \r\n";

    $dbstring = 'drop table `pertinenze`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `pertinenze` (
         `id_cond` int(4) DEFAULT NULL,
         `dest_uso` varchar(20) DEFAULT NULL,
         `catasto_sez_urbana` varchar(10) DEFAULT NULL,
         `catasto_foglio` varchar(6) DEFAULT NULL,
         `catasto_particella` varchar(10) DEFAULT NULL,
         `catasto_sub` varchar(6) DEFAULT NULL,
         `catasto_zona` varchar(10) DEFAULT NULL,
         `catasto_categoria` varchar(10) DEFAULT NULL,
         `catasto_classe` varchar(10) DEFAULT NULL,
         `catasto_consistenza` varchar(10) DEFAULT NULL,
         `catasto_superfice` varchar(10) DEFAULT NULL,
         `catasto_rendita` varchar(10) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function pertinenzeCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/pertinenze; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_cond, ';
    $sql .= 'dest_uso, ';
    $sql .= 'catasto_sez_urbana, ';
    $sql .= 'catasto_foglio, ';
    $sql .= 'catasto_particella, ';
    $sql .= 'catasto_sub, ';
    $sql .= 'catasto_zona, ';
    $sql .= 'catasto_categoria, ';
    $sql .= 'catasto_classe, ';
    $sql .= 'catasto_consistenza, ';
    $sql .= 'catasto_superfice, ';
    $sql .= 'catasto_rendita ';
    $sql .= 'FROM pertinenze ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('pertinenze', $row);
    }
}
