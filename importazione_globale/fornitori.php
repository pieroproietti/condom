<?php

function fornitoriCrea($dd)
{
    $dbstring = 'drop table `fornitori`;';
    echo "Creazione fornitori; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fornitori` (
          `id` int(11) DEFAULT NULL,
          `cod_forn` int(4) DEFAULT NULL,
          `cognome` varchar(45) DEFAULT NULL,
          `nome` varchar(35) DEFAULT NULL,
          `indirizzo` varchar(35) DEFAULT NULL,
          `cap` varchar(5) DEFAULT NULL,
          `comune` varchar(25) DEFAULT NULL,
          `provincia` varchar(2) DEFAULT NULL,
          `nato_il` datetime DEFAULT NULL,
          `nato_a` varchar(35) DEFAULT NULL,
          `nato_provincia` varchar(2) DEFAULT NULL,
          `codice_fiscale` varchar(16) DEFAULT NULL,
          `partita_iva` varchar(11) DEFAULT NULL,
          `natura` varchar(3) DEFAULT NULL,
          `sede_inps` varchar(3) DEFAULT NULL,
          `sesso` varchar(1) DEFAULT NULL,
          `in_elenco` varchar(2) DEFAULT NULL,
          `non_residente` varchar(1) DEFAULT NULL,
          `al_cassa` decimal(10,2) DEFAULT NULL,
          `des_cassa` varchar(30) DEFAULT NULL,
          `rit_95100` int(2) DEFAULT NULL,
          `ubicaz_1` varchar(30) DEFAULT NULL,
          `ubicaz_2` varchar(30) DEFAULT NULL,
          `ubicaz_3` varchar(30) DEFAULT NULL,
          `ubicaz_4` varchar(30) DEFAULT NULL,
          `telef_1` varchar(15) DEFAULT NULL,
          `telef_2` varchar(15) DEFAULT NULL,
          `telef_3` varchar(15) DEFAULT NULL,
          `telef_4` varchar(15) DEFAULT NULL,
          `note` varchar(120) DEFAULT NULL,
          `importo_ac` decimal(10,2) DEFAULT NULL,
          `tipo_riga` varchar(20) DEFAULT NULL,
          `appoggio` varchar(95) DEFAULT NULL,
          `s_n` varchar(2) DEFAULT NULL,
          `etichette` varchar(2) DEFAULT NULL,
          `titolo` varchar(50) DEFAULT NULL,
          `indir_email` varchar(150) DEFAULT NULL,
          `perc_cassa_prof` int(2) DEFAULT NULL,
          `trib_1019_1020` varchar(5) DEFAULT NULL,
          `cod_iban` varchar(27) DEFAULT NULL,
          `selezionato` varchar(2) DEFAULT NULL,
          `contrib_minimi` varchar(2) DEFAULT NULL,
          `importo_770` decimal(10,2) DEFAULT NULL,
          `fax` varchar(20) DEFAULT NULL,
          `cellulare` varchar(20) DEFAULT NULL,
          `selez_copia` varchar(2) DEFAULT NULL,
          `new_cod` int(4) DEFAULT NULL,
          `l_388_nuove_iniz` varchar(2) DEFAULT NULL,
          `temp_certificaz` varchar(2) DEFAULT NULL,
          `ricorda_che_forn` text,
          `utilizzo` varchar(1) DEFAULT NULL,
          `agg_utilizzo_forn` datetime DEFAULT NULL,
          `descrizione` varchar(200) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        ALTER TABLE `fornitori` ADD PRIMARY KEY (`id`),  ADD UNIQUE KEY `uuid` (`uuid`);
        ALTER TABLE `fornitori` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                ';

            $dd->query($dbstring);
            echo '<br/>'.$dbstring.'<br/>';
        }

function fornitoriImporta($ds, $dd)
{
  $table = 'fornitori';
  $columns = [
              'id_fornitore     (id)',
              'cod_forn',
              'cognome',
              'nome',
              'indirizzo',
              'cap',
              'citta        (comune)',
              'pr           (provincia)',
              'dt_nas       (nato_il)',
              'luo_nas      (nato_a)',
              'pr_nas       (nato_provincia)',
              'cod_fisc     (codice_fiscale)',
              'p_iva        (partita_iva)',
              'natura',
              'sede_inps',
              'sesso',
              'in_elenco',
              'non_residente',
              'al_cassa',
              'des_cassa',
              'rit_95100',
              'ubicaz_1',
              'ubicaz_2',
              'ubicaz_3',
              'ubicaz_4',
              'telef_1',
              'telef_2',
              'telef_3',
              'telef_4',
              'note',
              'importo_ac',
              'tipo_riga',
              'appoggio',
              's_n',
              'etichette',
              'titolo',
              'indir_email',
              'perc_cassa_prof',
              'trib_1019_1020',
              'cod_iban',
              'selezionato',
              'contrib_minimi',
              'importo_770',
              'fax',
              'cellulare',
              'selez_copia',
              'new_cod',
              'l_388_nuove_iniz',
              'temp_certificaz',
              'ricorda_che_forn',
              'utilizzo',
              'agg_utilizzo_forn',
              'descrizione'
            ];

    $fornitori = $ds->select($table, $columns);

    if (!empty($fornitori)) {
        echo 'fornitori NOT empty';
        foreach ($fornitori as &$fornitore) {
            $dd->insert('fornitori', $fornitore);
        }
    }
}
