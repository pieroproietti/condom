<?php
namespace SingoloAnno;

function incassiCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/incassi; \r\n";

    $dbstring = 'drop table `incassi`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `incassi` (
         `id_incasso` int(4) DEFAULT NULL,
         `cod_cond` int(4) DEFAULT NULL,
         `cond_inquil` varchar(1) DEFAULT NULL,
         `n_riferimento` int(2) DEFAULT NULL,
         `anno_rif` varchar(9) DEFAULT NULL,
         `da_ricev_diretto` varchar(1) DEFAULT NULL,
         `n_ricevuta` int(4) DEFAULT NULL,
         `posiz_riga` int(2) DEFAULT NULL,
         `anno_ricev` varchar(9) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `o_r_s` varchar(1) DEFAULT NULL,
         `importo_pagato` int(4) DEFAULT NULL,
         `importo_pagato_euro` decimal(10,2) DEFAULT NULL,
         `d_p_e` varchar(1) DEFAULT NULL,
         `dt_empag` datetime DEFAULT NULL,
         `descrizione` varchar(100) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `cod_cassa` varchar(3) DEFAULT NULL,
         `totale` decimal(10,2) DEFAULT NULL,
         `str_orig` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function incassiCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/incassi; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_incasso, ';
    $sql .= 'cod_cond, ';
    $sql .= 'cond_inquil, ';
    $sql .= 'n_riferimento, ';
    $sql .= 'anno_rif, ';
    $sql .= 'da_ricev_diretto, ';
    $sql .= 'n_ricevuta, ';
    $sql .= 'posiz_riga, ';
    $sql .= 'anno_ricev, ';
    $sql .= 'n_mese, ';
    $sql .= 'o_r_s, ';
    $sql .= 'importo_pagato, ';
    $sql .= 'importo_pagato_euro, ';
    $sql .= 'd_p_e, ';
    $sql .= 'dt_empag, ';
    $sql .= 'descrizione, ';
    $sql .= 'n_stra, ';
    $sql .= 'cod_cassa, ';
    $sql .= 'totale, ';
    $sql .= 'str_orig ';
    $sql .= 'FROM incassi ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('incassi', $row);
    }
}
