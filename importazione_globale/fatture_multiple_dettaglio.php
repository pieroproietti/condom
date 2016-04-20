<?php

function fattureMultipleDettaglioCrea($dd)
{
    $dbstring = 'drop table `fatture_multiple_dettaglio`;';
    echo "Creazione fatture_multiple_dettaglio; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fatture_multiple_dettaglio` (
        `id` int(11) DEFAULT NULL,
        `stabile_id` int(11) DEFAULT NULL,
        `stabile_uuid` varchar(36) NULL,
          `riferimento` int(4) DEFAULT NULL,
          `fornitore_id` int(11) DEFAULT NULL,
          `data_fattura` datetime DEFAULT NULL,
          `data_pagamento` datetime DEFAULT NULL,
          `num_fattura` varchar(12) DEFAULT NULL,
          `descrizione_sintetica` varchar(100) DEFAULT NULL,
          `descriz_corpo` varchar(250) DEFAULT NULL,
          `conteggi_a_m` varchar(1) DEFAULT NULL,
          `onorario_1` decimal(10,2) DEFAULT NULL,
          `aliq_4perc_1` decimal(10,2) DEFAULT NULL,
          `importo_4perc_1` decimal(10,2) DEFAULT NULL,
          `aliq_cassa_1` decimal(10,2) DEFAULT NULL,
          `importo_cassa_1` decimal(10,2) DEFAULT NULL,
          `imponibile_1` decimal(10,2) DEFAULT NULL,
          `aliq_iva_1` decimal(10,2) DEFAULT NULL,
          `importo_iva_1` decimal(10,2) DEFAULT NULL,
          `totale_fattura_1` decimal(10,2) DEFAULT NULL,
          `onorario_2` decimal(10,2) DEFAULT NULL,
          `aliq_4perc_2` decimal(10,2) DEFAULT NULL,
          `importo_4perc_2` decimal(10,2) DEFAULT NULL,
          `aliq_cassa_2` decimal(10,2) DEFAULT NULL,
          `importo_cassa_2` decimal(10,2) DEFAULT NULL,
          `imponibile_2` decimal(10,2) DEFAULT NULL,
          `aliq_iva_2` decimal(10,2) DEFAULT NULL,
          `importo_iva_2` decimal(10,2) DEFAULT NULL,
          `totale_fattura_2` decimal(10,2) DEFAULT NULL,
          `onorario_3` decimal(10,2) DEFAULT NULL,
          `aliq_4perc_3` decimal(10,2) DEFAULT NULL,
            `importo_4perc_3` decimal(10,2) DEFAULT NULL,
            `aliq_cassa_3` decimal(10,2) DEFAULT NULL,
            `importo_cassa_3` decimal(10,2) DEFAULT NULL,
            `imponibile_3` decimal(10,2) DEFAULT NULL,
            `aliq_iva_3` decimal(10,2) DEFAULT NULL,
            `importo_iva_3` decimal(10,2) DEFAULT NULL,
            `totale_fattura_3` decimal(10,2) DEFAULT NULL,
            `onorario_4` decimal(10,2) DEFAULT NULL,
            `aliq_4perc_4` decimal(10,2) DEFAULT NULL,
            `importo_4perc_4` decimal(10,2) DEFAULT NULL,
            `aliq_cassa_4` decimal(10,2) DEFAULT NULL,
            `importo_cassa_4` decimal(10,2) DEFAULT NULL,
            `imponibile_4` decimal(10,2) DEFAULT NULL,
            `aliq_iva_4` decimal(10,2) DEFAULT NULL,
            `importo_iva_4` decimal(10,2) DEFAULT NULL,
            `totale_fattura_4` decimal(10,2) DEFAULT NULL,
            `onorario_5` decimal(10,2) DEFAULT NULL,
            `aliq_4perc_5` decimal(10,2) DEFAULT NULL,
            `importo_4perc_5` decimal(10,2) DEFAULT NULL,
            `aliq_cassa_5` decimal(10,2) DEFAULT NULL,
            `importo_cassa_5` decimal(10,2) DEFAULT NULL,
            `imponibile_5` decimal(10,2) DEFAULT NULL,
            `aliq_iva_5` decimal(10,2) DEFAULT NULL,
            `importo_iva_5` decimal(10,2) DEFAULT NULL,
            `totale_fattura_5` decimal(10,2) DEFAULT NULL,
            `onorario_t` decimal(10,2) DEFAULT NULL,
            `importo_4perc_t` decimal(10,2) DEFAULT NULL,
            `importo_cassa_t` decimal(10,2) DEFAULT NULL,
            `imponibile_t` decimal(10,2) DEFAULT NULL,
            `importo_iva_t` decimal(10,2) DEFAULT NULL,
            `totale_fattura_t` decimal(10,2) DEFAULT NULL,
            `aliq_rda` decimal(10,2) DEFAULT NULL,
            `importo_rda` decimal(10,2) DEFAULT NULL,
            `rimborsi` decimal(10,2) DEFAULT NULL,
            `importo_netto` decimal(10,2) DEFAULT NULL,
            `prof_occas` varchar(1) DEFAULT NULL,
            `id_anno` int(4) DEFAULT NULL,
            `voce_compenso_1` varchar(3) DEFAULT NULL,
            `voce_compenso_2` varchar(3) DEFAULT NULL,
            `voce_compenso_3` varchar(3) DEFAULT NULL,
            `voce_compenso_4` varchar(3) DEFAULT NULL,
            `voce_compenso_5` varchar(3) DEFAULT NULL,
            `voce_rda` varchar(3) DEFAULT NULL,
            `reg_compenso` int(4) DEFAULT NULL,
            `reg_compenso_1` int(4) DEFAULT NULL,
            `reg_compenso_2` int(4) DEFAULT NULL,
            `reg_compenso_3` int(4) DEFAULT NULL,
            `reg_compenso_4` int(4) DEFAULT NULL,
            `reg_compenso_5` int(4) DEFAULT NULL,
            `reg_rda_meno` int(4) DEFAULT NULL,
            `reg_rda_debito` int(4) DEFAULT NULL,
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
            `descrizione_reg_1` varchar(100) DEFAULT NULL,
            `descrizione_reg_2` varchar(100) DEFAULT NULL,
            `descrizione_reg_3` varchar(100) DEFAULT NULL,
            `descrizione_reg_4` varchar(100) DEFAULT NULL,
            `descrizione_reg_5` varchar(100) DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

            ALTER TABLE `fatture_amministratore` ADD PRIMARY KEY (`id`),  ADD UNIQUE KEY `uuid` (`uuid`);
            ALTER TABLE `fatture_amministratore` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
            ';

    $dd->query($dbstring);
    echo '<br/>'.$dbstring.'<br/>';
}

    function fattureMultipleDettaglioImporta($ds, $dd)
    {
        $table = 'fatt_multiple_dett';
        $columns = [
          'id_fatture       (id)',
          'id_stabile       (stabile_id)',
//          'stabile_uuid',
            'riferimento',
            'cod_fornitore  (fornitore_id)',
            'data_fattura',
            'data_pagamento',
            'num_fattura',
            'descrizione_sintetica',
            'descriz_corpo',
            'conteggi_a_m',
            'onorario_1',
            'aliq_4perc_1',
            'importo_4perc_1',
            'aliq_cassa_1',
            'importo_cassa_1',
            'imponibile_1',
            'aliq_iva_1',
            'importo_iva_1',
            'totale_fattura_1',
            'onorario_2',
            'aliq_4perc_2',
            'importo_4perc_2',
            'aliq_cassa_2',
            'importo_cassa_2',
            'imponibile_2',
            'aliq_iva_2',
            'importo_iva_2',
            'totale_fattura_2',
            'onorario_3',
            'aliq_4perc_3',
              'importo_4perc_3',
              'aliq_cassa_3',
              'importo_cassa_3',
              'imponibile_3',
              'aliq_iva_3',
              'importo_iva_3',
              'totale_fattura_3',
              'onorario_4',
              'aliq_4perc_4',
              'importo_4perc_4',
              'aliq_cassa_4',
              'importo_cassa_4',
              'imponibile_4',
              'aliq_iva_4',
              'importo_iva_4',
              'totale_fattura_4',
              'onorario_5',
              'aliq_4perc_5',
              'importo_4perc_5',
              'aliq_cassa_5',
              'importo_cassa_5',
              'imponibile_5',
              'aliq_iva_5',
              'importo_iva_5',
              'totale_fattura_5',
              'onorario_t',
              'importo_4perc_t',
              'importo_cassa_t',
              'imponibile_t',
              'importo_iva_t',
              'totale_fattura_t',
              'aliq_rda',
              'importo_rda',
              'rimborsi',
              'importo_netto',
              'prof_occas',
              'id_anno',
              'voce_compenso_1',
              'voce_compenso_2',
              'voce_compenso_3',
              'voce_compenso_4',
              'voce_compenso_5',
              'voce_rda',
              'reg_compenso',
              'reg_compenso_1',
              'reg_compenso_2',
              'reg_compenso_3',
              'reg_compenso_4',
              'reg_compenso_5',
              'reg_rda_meno',
              'reg_rda_debito',
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
              'descrizione_reg_1',
              'descrizione_reg_2',
              'descrizione_reg_3',
              'descrizione_reg_4',
              'descrizione_reg_5',
            ];
        $fattureMultipleDettaglio = $ds->select($table, $columns);
        //print_r($fattureMultipleDettaglio);
        if (!empty($fattureMultipleDettaglio)) {
            echo 'fatture NOT empty';
            foreach ($fattureMultipleDettaglio as &$fatturaMultiplaDettaglio) {
                print_r($fatturaMultiplaDettaglio);
                $fatturaMultiplaDettaglio['stabile_uuid'] = stabile_uuid($dd, $fatturaMultiplaDettaglio['stabile_id']);
                $dd->insert('fatture_multiple_dettaglio', $fatturaMultiplaDettaglio);
            }
        }
    }
