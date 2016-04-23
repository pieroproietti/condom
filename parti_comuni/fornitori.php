<?php

function fornitoriCreate($ds, $dd)
{
    $dbstring = 'drop table `fornitori`;';
    echo "Creazione parti_comuni/fornitori; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fornitori` (
         `id_fornitore` int(4) DEFAULT NULL,
         `cod_forn` int(4) DEFAULT NULL,
         `cognome` varchar(45) DEFAULT NULL,
         `nome` varchar(35) DEFAULT NULL,
         `indirizzo` varchar(35) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(25) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `dt_nas` datetime DEFAULT NULL,
         `luo_nas` varchar(35) DEFAULT NULL,
         `pr_nas` varchar(2) DEFAULT NULL,
         `cod_fisc` varchar(16) DEFAULT NULL,
         `p_iva` varchar(11) DEFAULT NULL,
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
         `ricorda_che_forn` text DEFAULT NULL,
         `utilizzo` varchar(1) DEFAULT NULL,
         `agg_utilizzo_forn` datetime DEFAULT NULL,
         `descrizione` varchar(200) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fornitoriCopy($ds, $dd)
{
  echo "Importazione da access di: parti_comuni/fornitori;\n\r";

    $sql = 'SELECT ';
    $sql .= 'id_fornitore, ';
    $sql .= 'cod_forn, ';
    $sql .= 'cognome, ';
    $sql .= 'nome, ';
    $sql .= 'indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'dt_nas, ';
    $sql .= 'luo_nas, ';
    $sql .= 'pr_nas, ';
    $sql .= 'cod_fisc, ';
    $sql .= 'p_iva, ';
    $sql .= 'natura, ';
    $sql .= 'sede_inps, ';
    $sql .= 'sesso, ';
    $sql .= 'in_elenco, ';
    $sql .= 'non_residente, ';
    $sql .= 'al_cassa, ';
    $sql .= 'des_cassa, ';
    $sql .= 'rit_95100, ';
    $sql .= 'ubicaz_1, ';
    $sql .= 'ubicaz_2, ';
    $sql .= 'ubicaz_3, ';
    $sql .= 'ubicaz_4, ';
    $sql .= 'telef_1, ';
    $sql .= 'telef_2, ';
    $sql .= 'telef_3, ';
    $sql .= 'telef_4, ';
    $sql .= 'note, ';
    $sql .= 'importo_ac, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'appoggio, ';
    $sql .= 's_n, ';
    $sql .= 'etichette, ';
    $sql .= 'titolo, ';
    $sql .= 'indir_email, ';
    $sql .= 'perc_cassa_prof, ';
    $sql .= 'trib_1019_1020, ';
    $sql .= 'cod_iban, ';
    $sql .= 'selezionato, ';
    $sql .= 'contrib_minimi, ';
    $sql .= 'importo_770, ';
    $sql .= 'fax, ';
    $sql .= 'cellulare, ';
    $sql .= 'selez_copia, ';
    $sql .= 'new_cod, ';
    $sql .= 'l_388_nuove_iniz, ';
    $sql .= 'temp_certificaz, ';
    $sql .= 'ricorda_che_forn, ';
    $sql .= 'utilizzo, ';
    $sql .= 'agg_utilizzo_forn, ';
    $sql .= 'descrizione ';
    $sql .= 'FROM fornitori ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fornitori', $row);
    }
}
