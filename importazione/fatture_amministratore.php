<?php

function fattureAmministratoreCrea($dd)
{
    echo "Creazione condom\fatture_amministratore;\n\r";

    $dbstring = 'drop table `fatture_amministratore`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fatture_amministratore` (
        `id` int(11) DEFAULT NULL,
        `stabile_id` int(11) DEFAULT NULL,
        `stabile_uuid` varchar(36) NULL,
        `cliente_nome` varchar(50) DEFAULT NULL,
        `cliente_indirizzo` varchar(50) DEFAULT NULL,
        `cliente_cap` varchar(5) DEFAULT NULL,
        `cliente_comune` varchar(50) DEFAULT NULL,
        `cliente_provincia` varchar(2) DEFAULT NULL,
        `cliente_codice_fiscale` varchar(16) DEFAULT NULL,
        `cliente_partita_iva` varchar(11) DEFAULT NULL,
        `fornitore_id` int(11) DEFAULT NULL,
        `data_fattura` datetime DEFAULT NULL,
        `anno` int(2) DEFAULT NULL,
        `data_pagamento` datetime DEFAULT NULL,
        `num_fattura` int(4) DEFAULT NULL,
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
        `appoggio` varchar(100) DEFAULT NULL,
        `mensilita_mese` int(2) DEFAULT NULL,
        `mensilita_anno` int(2) DEFAULT NULL,
        `cartella_anni` varchar(50) DEFAULT NULL,
        `id_anno` int(4) DEFAULT NULL,
        `voce_compenso` varchar(3) DEFAULT NULL,
        `voce_rda` varchar(3) DEFAULT NULL,
        `reg_compenso` int(4) DEFAULT NULL,
        `reg_rda` int(4) DEFAULT NULL,
        `reg_fin` int(4) DEFAULT NULL,
        `reg_contab_ammin` int(4) DEFAULT NULL,
        `reg_gestione` varchar(15) DEFAULT NULL,
        `reg_nstra` int(2) DEFAULT NULL,
        `rif_fat_rda_mio` int(4) DEFAULT NULL,
        `note` text,
        `cassa_m_proposta` varchar(3) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

        ALTER TABLE `fatture_amministratore` ADD PRIMARY KEY (`id`);
        ALTER TABLE `fatture_amministratore` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        ';

    $dd->query($dbstring);
    //echo '<br/>'.$dbstring.'<br/>';
}

function fattureAmministratoreImporta($ds, $dd)
{
    echo "Importazione di: parti_comuni/fatture_amministratore in: condom/fatture_amministratore;\n\r";

    $table = 'fatture_amministratore';
    $columns = [
        'id_fattura   (id)',
        'cod_stabile  (stabile_id)',
        //'stabile_uuid',
        'cliente_nome',
        'cliente_indirizzo',
        'cliente_cap',
        'cliente_citta  (cliente_comune)',
        'cliente_pr     (cliente_provincia)',
        'cliente_cf     (cliente_codice_fiscale)',
        'cliente_pi     (cliente_partita_iva)',
        'cod_fornitore  (fornitore_id)',
        'data_fattura',
        'anno',
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
        'appoggio',
        'mensilita_mese',
        'mensilita_anno',
        'cartella_anni',
        'id_anno',
        'voce_compenso',
        'voce_rda',
        'reg_compenso',
        'reg_rda',
        'reg_fin',
        'reg_contab_ammin',
        'reg_gestione',
        'reg_nstra',
        'rif_fat_rda_mio',
        'note',
        'cassa_m_proposta',
      ];
    $fattureAmministratore = $ds->select($table, $columns);

    if (!empty($fattureAmministratore)) {
        echo 'fatture NOT empty';
        foreach ($fattureAmministratore as &$fatturaAmministratore) {
            $fatturaAmministratore['stabile_uuid'] = stabile_uuid($dd, $fatturaAmministratore['stabile_id']);
            $dd->insert('fatture_amministratore', $fatturaAmministratore);
        }
    }
}
