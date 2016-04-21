<?php

function fattureCreate($ds, $dd)
{
    $dbstring = 'drop table `fatture`;';
    echo "Creazione fatture; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fatture` (
         `id_fatture` int(4) DEFAULT NULL,
         `id_stabile` int(4) DEFAULT NULL,
         `riferimento` int(4) DEFAULT NULL,
         `cod_fornitore` int(4) DEFAULT NULL,
         `data_fattura` datetime DEFAULT NULL,
         `data_pagamento` datetime DEFAULT NULL,
         `num_fattura` varchar(12) DEFAULT NULL,
         `descrizione_sintetica` varchar(100) DEFAULT NULL,
         `descriz_corpo` varchar(250) DEFAULT NULL,
         `conteggi_a_m` varchar(1) DEFAULT NULL,
         `onorario` decimal(10,2) DEFAULT NULL,
         `aliq_4perc` decimal(10,2) DEFAULT NULL,
         `importo_4perc` decimal(10,2) DEFAULT NULL,
         `aliq_cassa` decimal(10,2) DEFAULT NULL,
         `importo_cassa` decimal(10,2) DEFAULT NULL,
         `imponibile` decimal(10,2) DEFAULT NULL,
         `aliq_inps` decimal(10,2) DEFAULT NULL,
         `importo_inps` decimal(10,2) DEFAULT NULL,
         `aliq_iva` decimal(10,2) DEFAULT NULL,
         `importo_iva` decimal(10,2) DEFAULT NULL,
         `totale_fattura` decimal(10,2) DEFAULT NULL,
         `aliq_rda` decimal(10,2) DEFAULT NULL,
         `importo_rda` decimal(10,2) DEFAULT NULL,
         `rimborsi` decimal(10,2) DEFAULT NULL,
         `importo_netto` decimal(10,2) DEFAULT NULL,
         `prof_occas` varchar(1) DEFAULT NULL,
         `id_anno` int(4) DEFAULT NULL,
         `voce_compenso` varchar(3) DEFAULT NULL,
         `voce_rda` varchar(3) DEFAULT NULL,
         `reg_compenso` int(4) DEFAULT NULL,
         `reg_rda` int(4) DEFAULT NULL,
         `reg_gestione` varchar(15) DEFAULT NULL,
         `reg_nstra` int(2) DEFAULT NULL,
         `cassa_compenso` varchar(3) DEFAULT NULL,
         `cassa_rda` varchar(3) DEFAULT NULL,
         `rif_f24` int(4) DEFAULT NULL,
         `note` varchar(80) DEFAULT NULL,
         `rif_fatt_mio` int(4) DEFAULT NULL,
         `compet_compenso` varchar(1) DEFAULT NULL,
         `compet_rda` varchar(1) DEFAULT NULL,
         `bonifico_diretto` datetime DEFAULT NULL,
         `file_bonifico_telematico` varchar(100) DEFAULT NULL,
         `etic_axivar` varchar(50) DEFAULT NULL,
         `singola_multipla` varchar(1) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fattureCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_fatture, ';
    $sql .= 'id_stabile, ';
    $sql .= 'riferimento, ';
    $sql .= 'cod_fornitore, ';
    $sql .= 'data_fattura, ';
    $sql .= 'data_pagamento, ';
    $sql .= 'num_fattura, ';
    $sql .= 'descrizione_sintetica, ';
    $sql .= 'descriz_corpo, ';
    $sql .= 'conteggi_a_m, ';
    $sql .= 'onorario, ';
    $sql .= 'aliq_4perc, ';
    $sql .= 'importo_4perc, ';
    $sql .= 'aliq_cassa, ';
    $sql .= 'importo_cassa, ';
    $sql .= 'imponibile, ';
    $sql .= 'aliq_inps, ';
    $sql .= 'importo_inps, ';
    $sql .= 'aliq_iva, ';
    $sql .= 'importo_iva, ';
    $sql .= 'totale_fattura, ';
    $sql .= 'aliq_rda, ';
    $sql .= 'importo_rda, ';
    $sql .= 'rimborsi, ';
    $sql .= 'importo_netto, ';
    $sql .= 'prof_occas, ';
    $sql .= 'id_anno, ';
    $sql .= 'voce_compenso, ';
    $sql .= 'voce_rda, ';
    $sql .= 'reg_compenso, ';
    $sql .= 'reg_rda, ';
    $sql .= 'reg_gestione, ';
    $sql .= 'reg_nstra, ';
    $sql .= 'cassa_compenso, ';
    $sql .= 'cassa_rda, ';
    $sql .= 'rif_f24, ';
    $sql .= 'note, ';
    $sql .= 'rif_fatt_mio, ';
    $sql .= 'compet_compenso, ';
    $sql .= 'compet_rda, ';
    $sql .= 'bonifico_diretto, ';
    $sql .= 'file_bonifico_telematico, ';
    $sql .= 'etic_axivar, ';
    $sql .= 'singola_multipla ';
    $sql .= 'FROM fatture ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fatture', $row);
    }
}
