<?php

function fonts_firmaCreate($ds, $dd)
{
    $dbstring = 'drop table `fonts_firma`;';
    echo "Creazione parti_comuni/fonts_firma; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fonts_firma` (
         `idm` int(2) DEFAULT NULL,
         `font` varchar(120) DEFAULT NULL,
         `dim_proposte` varchar(50) DEFAULT NULL,
         `neretto` varchar(2) DEFAULT NULL,
         `inclinato` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fonts_firmaCopy($ds, $dd)
{
  echo "Importazione da access di: parti_comuni/fonts_firma;\n\r";

    $sql = 'SELECT ';
    $sql .= 'idm, ';
    $sql .= 'font, ';
    $sql .= 'dim_proposte, ';
    $sql .= 'neretto, ';
    $sql .= 'inclinato ';
    $sql .= 'FROM fonts_firma ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fonts_firma', $row);
    }
}
