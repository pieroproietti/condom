<?php

function straordinarieCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/straordinarie; \r\n";

    $dbstring = 'drop table `straordinarie`;';
    echo "Creazione straordinarie; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `straordinarie` (
         `id_stra` int(4) DEFAULT NULL,
         `codice` int(2) DEFAULT NULL,
         `descriz_prev_cons` varchar(80) DEFAULT NULL,
         `descriz_ricev` varchar(30) DEFAULT NULL,
         `descriz_ccp` varchar(10) DEFAULT NULL,
         `num_rate` int(2) DEFAULT NULL,
         `inizio_mese` int(2) DEFAULT NULL,
         `inizio_anno` int(2) DEFAULT NULL,
         `periodicita` varchar(1) DEFAULT NULL,
         `composiz_uguali_perc` varchar(1) DEFAULT NULL,
         `rata_1` smallint DEFAULT NULL,
         `rata_2` smallint DEFAULT NULL,
         `rata_3` smallint DEFAULT NULL,
         `rata_4` smallint DEFAULT NULL,
         `rata_5` smallint DEFAULT NULL,
         `rata_6` smallint DEFAULT NULL,
         `rata_7` smallint DEFAULT NULL,
         `rata_8` smallint DEFAULT NULL,
         `rata_9` smallint DEFAULT NULL,
         `rata_10` smallint DEFAULT NULL,
         `rata_11` smallint DEFAULT NULL,
         `rata_12` smallint DEFAULT NULL,
         `natura` varchar(1) DEFAULT NULL,
         `aggregazione` int(2) DEFAULT NULL,
         `chius_definitiva` varchar(30) DEFAULT NULL,
         `sn_temp` varchar(1) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `note_consuntivo` text DEFAULT NULL,
         `note_confronto` text DEFAULT NULL,
         `note_sit_cassa` text DEFAULT NULL,
         `note_sit_patrim` text DEFAULT NULL,
         `fincatura_rip_prev` varchar(1) DEFAULT NULL,
         `fincatura_rip_cons` varchar(1) DEFAULT NULL,
         `arrotond_importo` int(2) DEFAULT NULL,
         `arrotond_in_euro` decimal(10,2) DEFAULT NULL,
         `arrotond_conguaglio` decimal(10,2) DEFAULT NULL,
         `arrotond_dae` varchar(1) DEFAULT NULL,
         `arrotond_recupero` varchar(1) DEFAULT NULL,
         `dim_font_rip_prev` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_prev` decimal(10,2) DEFAULT NULL,
         `dim_font_rip_cons` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_cons` decimal(10,2) DEFAULT NULL,
         `in_ec_stra` varchar(2) DEFAULT NULL,
         `in_sit_compl_stra` varchar(2) DEFAULT NULL,
         `in_consegne_stra` varchar(2) DEFAULT NULL,
         `periodo_dal` datetime DEFAULT NULL,
         `periodo_al` datetime DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function straordinarieCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/straordinarie; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_stra, ';
    $sql .= 'codice, ';
    $sql .= 'descriz_prev_cons, ';
    $sql .= 'descriz_ricev, ';
    $sql .= 'descriz_ccp, ';
    $sql .= 'num_rate, ';
    $sql .= 'inizio_mese, ';
    $sql .= 'inizio_anno, ';
    $sql .= 'periodicita, ';
    $sql .= 'composiz_uguali_perc, ';
    $sql .= 'rata_1, ';
    $sql .= 'rata_2, ';
    $sql .= 'rata_3, ';
    $sql .= 'rata_4, ';
    $sql .= 'rata_5, ';
    $sql .= 'rata_6, ';
    $sql .= 'rata_7, ';
    $sql .= 'rata_8, ';
    $sql .= 'rata_9, ';
    $sql .= 'rata_10, ';
    $sql .= 'rata_11, ';
    $sql .= 'rata_12, ';
    $sql .= 'natura, ';
    $sql .= 'aggregazione, ';
    $sql .= 'chius_definitiva, ';
    $sql .= 'sn_temp, ';
    $sql .= 'note, ';
    $sql .= 'note_consuntivo, ';
    $sql .= 'note_confronto, ';
    $sql .= 'note_sit_cassa, ';
    $sql .= 'note_sit_patrim, ';
    $sql .= 'fincatura_rip_prev, ';
    $sql .= 'fincatura_rip_cons, ';
    $sql .= 'arrotond_importo, ';
    $sql .= 'arrotond_in_euro, ';
    $sql .= 'arrotond_conguaglio, ';
    $sql .= 'arrotond_dae, ';
    $sql .= 'arrotond_recupero, ';
    $sql .= 'dim_font_rip_prev, ';
    $sql .= 'dim_interlinea_rip_prev, ';
    $sql .= 'dim_font_rip_cons, ';
    $sql .= 'dim_interlinea_rip_cons, ';
    $sql .= 'in_ec_stra, ';
    $sql .= 'in_sit_compl_stra, ';
    $sql .= 'in_consegne_stra, ';
    $sql .= 'periodo_dal, ';
    $sql .= 'periodo_al ';
    $sql .= 'FROM straordinarie ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('straordinarie', $row);
    }
}
