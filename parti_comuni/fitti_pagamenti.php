<?php

function fitti_pagamentiCreate($ds, $dd)
{
    $dbstring = 'drop table `fitti_pagamenti`;';
    echo "Creazione fitti_pagamenti; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fitti_pagamenti` (
         `id_pagamento` int(4) DEFAULT NULL,
         `cod_appartamento` int(2) DEFAULT NULL,
         `anno` int(2) DEFAULT NULL,
         `mese` int(2) DEFAULT NULL,
         `mese_descrizione` varchar(20) DEFAULT NULL,
         `data_pagamento` datetime DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `fitto` decimal(10,2) DEFAULT NULL,
         `istat_percentuale` decimal(10,2) DEFAULT NULL,
         `istat_importo` decimal(10,2) DEFAULT NULL,
         `descrizione_1` varchar(50) DEFAULT NULL,
         `descrizione_2` varchar(50) DEFAULT NULL,
         `importo_1` decimal(10,2) DEFAULT NULL,
         `importo_2` decimal(10,2) DEFAULT NULL,
         `bollo` decimal(10,2) DEFAULT NULL,
         `totale` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fitti_pagamentiCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_pagamento, ';
    $sql .= 'cod_appartamento, ';
    $sql .= 'anno, ';
    $sql .= 'mese, ';
    $sql .= 'mese_descrizione, ';
    $sql .= 'data_pagamento, ';
    $sql .= 'descrizione, ';
    $sql .= 'fitto, ';
    $sql .= 'istat_percentuale, ';
    $sql .= 'istat_importo, ';
    $sql .= 'descrizione_1, ';
    $sql .= 'descrizione_2, ';
    $sql .= 'importo_1, ';
    $sql .= 'importo_2, ';
    $sql .= 'bollo, ';
    $sql .= 'totale ';
    $sql .= 'FROM fitti_pagamenti ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fitti_pagamenti', $row);
    }
}
