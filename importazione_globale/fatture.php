<?php

function fattureCreate($ds, $dd)
{
    $dbstring = 'drop table `fatture`;';
    echo "Creazione fatture; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fatture` (
        `id` int(11) DEFAULT NULL,
        `stabile_id` int(11) DEFAULT NULL,
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
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

        ALTER TABLE `fatture` ADD PRIMARY KEY (`id`),  ADD UNIQUE KEY `uuid` (`uuid`);
        ALTER TABLE `fatture` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        ';

    $dd->query($sql);
    echo '<br/>'.$sql.'<br/>';
}

function fattureImporta($ds, $dd)
{
    $table = 'fatture';
    $columns = [
              'id_fatture     (id)',
              'id_stabile     (stabile_id)',
              'riferimento',
              'cod_fornitore',
              'data_fattura',
              'data_pagamento',
              'num_fattura',
              'descrizione_sintetica',
              'descriz_corpo',
              'conteggi_a_m',
              'onorario',
              'aliq_4perc',
              'importo_4perc',
              'aliq_cassa',
              'importo_cassa',
              'imponibile',
              'aliq_inps',
              'importo_inps',
              'aliq_iva',
              'importo_iva',
              'totale_fattura',
              'aliq_rda',
              'importo_rda',
              'rimborsi',
              'importo_netto',
              'prof_occas',
              'id_anno',
              'voce_compenso',
              'voce_rda',
              'reg_compenso',
              'reg_rda',
              'reg_gestione',
              'reg_nstra',
              'cassa_compenso',
              'cassa_rda',
              'rif_f24',
              'note',
              'rif_fatt_mio',
              'compet_compenso',
              'compet_rda',
              'bonifico_diretto',
              'file_bonifico_telematico',
              'etic_axivar',
              'singola_multipla',
            ];

    $fatture = $ds->select($table, $columns);

    if (!empty($fatture)) {
        echo 'fatture NOT empty';
        foreach ($fatture as &$fattura) {
            $fattura['stabile_uuid'] = stabile_uuid($dd, $fattura['stabile_id']);
            $dd->insert('fatture', $fattura);
        }
    } else {
        echo '$affitti=empty';
    }
}


function stabile_uuid($db, $id)
{
    $sql = "SELECT uuid FROM stabili WHERE id=$id";
    $rows = $db->query($sql)->fetchAll();
    echo $sql.'<br/>';
    foreach ($rows as $row) {
        $retval = $row['uuid'];
    }
    echo $retval;

    return $retval;
}
