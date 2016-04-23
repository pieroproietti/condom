<?php

function fatture_provvisorieCreate($ds, $dd)
{
    $dbstring = 'drop table `fatture_provvisorie`;';
    echo "Creazione parti_comuni/fatture_provvisorie; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fatture_provvisorie` (
         `id_fattura` int(4) DEFAULT NULL,
         `id_stabile` int(4) DEFAULT NULL,
         `cartella_anni` varchar(50) DEFAULT NULL,
         `id_anno` int(4) DEFAULT NULL,
         `cod_stabile` int(4) DEFAULT NULL,
         `cliente_nome` varchar(50) DEFAULT NULL,
         `cliente_indirizzo` varchar(50) DEFAULT NULL,
         `cliente_cap` varchar(5) DEFAULT NULL,
         `cliente_citta` varchar(50) DEFAULT NULL,
         `cliente_pr` varchar(2) DEFAULT NULL,
         `cliente_cf` varchar(16) DEFAULT NULL,
         `cliente_pi` varchar(11) DEFAULT NULL,
         `cod_fornitore` int(4) DEFAULT NULL,
         `data_fattura` datetime DEFAULT NULL,
         `anno` int(2) DEFAULT NULL,
         `data_pagamento` datetime DEFAULT NULL,
         `num_fattura` int(4) DEFAULT NULL,
         `descrizione_sintetica` varchar(50) DEFAULT NULL,
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
         `appoggio` varchar(100) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fatture_provvisorieCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_fattura, ';
    $sql .= 'id_stabile, ';
    $sql .= 'cartella_anni, ';
    $sql .= 'id_anno, ';
    $sql .= 'cod_stabile, ';
    $sql .= 'cliente_nome, ';
    $sql .= 'cliente_indirizzo, ';
    $sql .= 'cliente_cap, ';
    $sql .= 'cliente_citta, ';
    $sql .= 'cliente_pr, ';
    $sql .= 'cliente_cf, ';
    $sql .= 'cliente_pi, ';
    $sql .= 'cod_fornitore, ';
    $sql .= 'data_fattura, ';
    $sql .= 'anno, ';
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
    $sql .= 'appoggio, ';
    $sql .= 'tipo_riga ';
    $sql .= 'FROM fatture_provvisorie ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fatture_provvisorie', $row);
    }
}
