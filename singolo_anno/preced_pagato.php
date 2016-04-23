<?php

function preced_pagatoCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/preced_pagato; \r\n";

    $dbstring = 'drop table `preced_pagato`;';
    echo "Creazione preced_pagato; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `preced_pagato` (
         `n_incasso` int(2) DEFAULT NULL,
         `anno_rif` varchar(9) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `cond_inq` varchar(1) DEFAULT NULL,
         `pos_riga` int(2) DEFAULT NULL,
         `gestione` varchar(1) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `rata_mese` varchar(2) DEFAULT NULL,
         `importo_l` int(4) DEFAULT NULL,
         `importo_e` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function preced_pagatoCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/preced_pagato; \r\n";

    $sql = 'SELECT ';
    $sql .= 'n_incasso, ';
    $sql .= 'anno_rif, ';
    $sql .= 'id_condomino, ';
    $sql .= 'cond_inq, ';
    $sql .= 'pos_riga, ';
    $sql .= 'gestione, ';
    $sql .= 'n_stra, ';
    $sql .= 'rata_mese, ';
    $sql .= 'importo_l, ';
    $sql .= 'importo_e ';
    $sql .= 'FROM preced_pagato ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('preced_pagato', $row);
    }
}
