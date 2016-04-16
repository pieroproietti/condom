<?php

function emes_detCreate($ds, $dd)
{
    $dbstring = 'drop table `emes_det`;';
    echo "Creazione emes_det; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `emes_det` (
         `cod_cond` int(4) DEFAULT NULL,
         `cond_inq` varchar(1) DEFAULT NULL,
         `raggruppamento` int(4) DEFAULT NULL,
         `n_emissione` int(2) DEFAULT NULL,
         `anno_emissione` varchar(9) DEFAULT NULL,
         `n_ricevuta` int(4) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `o_r_s` varchar(1) DEFAULT NULL,
         `importo_dovuto` int(4) DEFAULT NULL,
         `importo_dovuto_euro` decimal(10,2) DEFAULT NULL,
         `dt_emissione_pagamento` datetime DEFAULT NULL,
         `descrizione` varchar(35) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `anno_gestione` varchar(9) DEFAULT NULL,
         `d_e_p` varchar(1) DEFAULT NULL,
         `resta_da_compensare` decimal(10,2) DEFAULT NULL,
         `str_orig` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function emes_detCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'cod_cond, ';
    $sql .= 'cond_inq, ';
    $sql .= 'raggruppamento, ';
    $sql .= 'n_emissione, ';
    $sql .= 'anno_emissione, ';
    $sql .= 'n_ricevuta, ';
    $sql .= 'n_mese, ';
    $sql .= 'o_r_s, ';
    $sql .= 'importo_dovuto, ';
    $sql .= 'importo_dovuto_euro, ';
    $sql .= 'dt_emissione_pagamento, ';
    $sql .= 'descrizione, ';
    $sql .= 'n_stra, ';
    $sql .= 'anno_gestione, ';
    $sql .= 'd_e_p, ';
    $sql .= 'resta_da_compensare, ';
    $sql .= 'str_orig ';
    $sql .= 'FROM emes_det ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('emes_det', $row);
    }
}
