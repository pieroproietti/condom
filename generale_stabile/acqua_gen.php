<?php

function acqua_genCreate($ds, $dd)
{
    $dbstring = 'drop table `acqua_gen`;';
    echo "Creazione generale_stabile\acqua_gen; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `acqua_gen` (
         `rif_ute` int(2) DEFAULT NULL,
         `rif_anno` varchar(9) DEFAULT NULL,
         `nom_ute` varchar(50) DEFAULT NULL,
         `ac_ripdif` varchar(10) DEFAULT NULL,
         `ripart_precedente` int(2) DEFAULT NULL,
         `n_trimestri` int(2) DEFAULT NULL,
         `max_fascia` varchar(1) DEFAULT NULL,
         `ac_ors` varchar(1) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `ac_tabella` varchar(6) DEFAULT NULL,
         `ac_pre_con` varchar(10) DEFAULT NULL,
         `descriz_1` varchar(40) DEFAULT NULL,
         `descriz_2` varchar(40) DEFAULT NULL,
         `descriz_3` varchar(40) DEFAULT NULL,
         `descriz_4` varchar(40) DEFAULT NULL,
         `importo_ft_1` int(4) DEFAULT NULL,
         `importo_ft_1_euro` decimal(10,2) DEFAULT NULL,
         `importo_ft_2` int(4) DEFAULT NULL,
         `importo_ft_2_euro` decimal(10,2) DEFAULT NULL,
         `importo_ft_3` int(4) DEFAULT NULL,
         `importo_ft_3_euro` decimal(10,2) DEFAULT NULL,
         `importo_ft_4` int(4) DEFAULT NULL,
         `importo_ft_4_euro` decimal(10,2) DEFAULT NULL,
         `di_cui_parti_uguali` int(4) DEFAULT NULL,
         `di_cui_parti_uguali_euro` decimal(10,2) DEFAULT NULL,
         `di_cui_millesimale` int(4) DEFAULT NULL,
         `di_cui_millesimale_euro` decimal(10,2) DEFAULT NULL,
         `di_cui_prop_consumi` int(4) DEFAULT NULL,
         `di_cui_prop_consumi_euro` decimal(10,2) DEFAULT NULL,
         `di_cui_personali` int(4) DEFAULT NULL,
         `di_cui_personali_euro` decimal(10,2) DEFAULT NULL,
         `altre_letturazione` int(4) DEFAULT NULL,
         `altre_letturazione_euro` decimal(10,2) DEFAULT NULL,
         `altre_descr_1` varchar(40) DEFAULT NULL,
         `altre_descr_2` varchar(40) DEFAULT NULL,
         `altre_importo_1` int(4) DEFAULT NULL,
         `altre_importo_1_euro` decimal(10,2) DEFAULT NULL,
         `altre_importo_2` int(4) DEFAULT NULL,
         `altre_importo_2_euro` decimal(10,2) DEFAULT NULL,
         `altre_forma_ripart_1` varchar(1) DEFAULT NULL,
         `altre_forma_ripart_2` varchar(1) DEFAULT NULL,
         `criterio_tariffazione` int(2) DEFAULT NULL,
         `n_mesi` int(2) DEFAULT NULL,
         `tariffa_periodo` varchar(6) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `note_acqua` text DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function acqua_genCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'rif_ute, ';
    $sql .= 'rif_anno, ';
    $sql .= 'nom_ute, ';
    $sql .= 'ac_ripdif, ';
    $sql .= 'ripart_precedente, ';
    $sql .= 'n_trimestri, ';
    $sql .= 'max_fascia, ';
    $sql .= 'ac_ors, ';
    $sql .= 'n_stra, ';
    $sql .= 'ac_tabella, ';
    $sql .= 'ac_pre_con, ';
    $sql .= 'descriz_1, ';
    $sql .= 'descriz_2, ';
    $sql .= 'descriz_3, ';
    $sql .= 'descriz_4, ';
    $sql .= 'importo_ft_1, ';
    $sql .= 'importo_ft_1_euro, ';
    $sql .= 'importo_ft_2, ';
    $sql .= 'importo_ft_2_euro, ';
    $sql .= 'importo_ft_3, ';
    $sql .= 'importo_ft_3_euro, ';
    $sql .= 'importo_ft_4, ';
    $sql .= 'importo_ft_4_euro, ';
    $sql .= 'di_cui_parti_uguali, ';
    $sql .= 'di_cui_parti_uguali_euro, ';
    $sql .= 'di_cui_millesimale, ';
    $sql .= 'di_cui_millesimale_euro, ';
    $sql .= 'di_cui_prop_consumi, ';
    $sql .= 'di_cui_prop_consumi_euro, ';
    $sql .= 'di_cui_personali, ';
    $sql .= 'di_cui_personali_euro, ';
    $sql .= 'altre_letturazione, ';
    $sql .= 'altre_letturazione_euro, ';
    $sql .= 'altre_descr_1, ';
    $sql .= 'altre_descr_2, ';
    $sql .= 'altre_importo_1, ';
    $sql .= 'altre_importo_1_euro, ';
    $sql .= 'altre_importo_2, ';
    $sql .= 'altre_importo_2_euro, ';
    $sql .= 'altre_forma_ripart_1, ';
    $sql .= 'altre_forma_ripart_2, ';
    $sql .= 'criterio_tariffazione, ';
    $sql .= 'n_mesi, ';
    $sql .= 'tariffa_periodo, ';
    $sql .= 'note, ';
    $sql .= 'note_acqua ';
    $sql .= 'FROM acqua_gen ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('acqua_gen', $row);
    }
}
