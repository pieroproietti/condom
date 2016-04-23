<?php

function acqua_fattureCreate($ds, $dd)
{
    echo "Creazione generale_stabile/acqua_fatture; \r\n";
    $dbstring = 'drop table `acqua_fatture`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `acqua_fatture` (
         `rif_ute` int(2) DEFAULT NULL,
         `descriz_ft` varchar(150) DEFAULT NULL,
         `importo_ft` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function acqua_fattureCopy($ds, $dd)
{
    echo "importazione da Access di: generale_statile/acqua_fatture;\n\r";

    $sql = 'SELECT ';
    $sql .= 'rif_ute, ';
    $sql .= 'descriz_ft, ';
    $sql .= 'importo_ft ';
    $sql .= 'FROM acqua_fatture ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('acqua_fatture', $row);
    }
}
