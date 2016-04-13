<?php
function emes_genCreate($ds, $dd)
{
   $dbstring = 'drop table `emes_gen`;';
   echo "Creazione emes_gen; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `emes_gen` (
         `n_emissione` int(2) DEFAULT NULL,
         `dt_emissione` datetime DEFAULT NULL,
         `anno_emissione` varchar(9) DEFAULT NULL,
         `dt_scadenza` datetime DEFAULT NULL,
         `ges_1` varchar(1) DEFAULT NULL,
         `n_stra_1` int(2) DEFAULT NULL,
         `e_anno_1` varchar(9) DEFAULT NULL,
         `dir_anno1` varchar(9) DEFAULT NULL,
         `n_rata_1` varchar(2) DEFAULT NULL,
         `descr_1` varchar(35) DEFAULT NULL,
         `forma_calcolo_1` varchar(1) DEFAULT NULL,
         `ges_2` varchar(1) DEFAULT NULL,
         `n_stra_2` int(2) DEFAULT NULL,
         `e_anno_2` varchar(9) DEFAULT NULL,
         `dir_anno2` varchar(9) DEFAULT NULL,
         `n_rata_2` varchar(2) DEFAULT NULL,
         `descr_2` varchar(35) DEFAULT NULL,
         `forma_calcolo_2` varchar(1) DEFAULT NULL,
         `ges_3` varchar(1) DEFAULT NULL,
         `n_stra_3` int(2) DEFAULT NULL,
         `e_anno_3` varchar(9) DEFAULT NULL,
         `dir_anno3` varchar(9) DEFAULT NULL,
         `n_rata_3` varchar(2) DEFAULT NULL,
         `descr_3` varchar(35) DEFAULT NULL,
         `forma_calcolo_3` varchar(1) DEFAULT NULL,
         `ges_4` varchar(1) DEFAULT NULL,
         `n_stra_4` int(2) DEFAULT NULL,
         `e_anno_4` varchar(9) DEFAULT NULL,
         `dir_anno4` varchar(9) DEFAULT NULL,
         `n_rata_4` varchar(2) DEFAULT NULL,
         `descr_4` varchar(35) DEFAULT NULL,
         `forma_calcolo_4` varchar(1) DEFAULT NULL,
         `ges_5` varchar(1) DEFAULT NULL,
         `n_stra_5` int(2) DEFAULT NULL,
         `e_anno_5` varchar(9) DEFAULT NULL,
         `dir_anno5` varchar(9) DEFAULT NULL,
         `n_rata_5` varchar(2) DEFAULT NULL,
         `descr_5` varchar(35) DEFAULT NULL,
         `forma_calcolo_5` varchar(1) DEFAULT NULL,
         `ges_6` varchar(1) DEFAULT NULL,
         `n_stra_6` int(2) DEFAULT NULL,
         `e_anno_6` varchar(9) DEFAULT NULL,
         `dir_anno6` varchar(9) DEFAULT NULL,
         `n_rata_6` varchar(2) DEFAULT NULL,
         `descr_6` varchar(35) DEFAULT NULL,
         `forma_calcolo_6` varchar(1) DEFAULT NULL,
         `note_avvisi` varchar(220) DEFAULT NULL,
         `note_ricevute` varchar(220) DEFAULT NULL,
         `note_ccp` varchar(120) DEFAULT NULL,
         `stampa_sn` varchar(2) DEFAULT NULL,
         `provvisora_definitava` varchar(10) DEFAULT NULL,
         `eserc_preced_1` varchar(9) DEFAULT NULL,
         `rata_prec_1` varchar(2) DEFAULT NULL,
         `eserc_preced_2` varchar(9) DEFAULT NULL,
         `rata_prec_2` varchar(2) DEFAULT NULL,
         `eserc_preced_3` varchar(9) DEFAULT NULL,
         `rata_prec_3` varchar(2) DEFAULT NULL,
         `eserc_preced_4` varchar(9) DEFAULT NULL,
         `rata_prec_4` varchar(2) DEFAULT NULL,
         `eserc_preced_5` varchar(9) DEFAULT NULL,
         `rata_prec_5` varchar(2) DEFAULT NULL,
         `eserc_preced_6` varchar(9) DEFAULT NULL,
         `rata_prec_6` varchar(2) DEFAULT NULL,
         `voce_1` varchar(15) DEFAULT NULL,
         `voce_2` varchar(15) DEFAULT NULL,
         `voce_3` varchar(15) DEFAULT NULL,
         `voce_4` varchar(15) DEFAULT NULL,
         `voce_5` varchar(15) DEFAULT NULL,
         `voce_6` varchar(15) DEFAULT NULL,
         `ccp_1_2` varchar(1) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function emes_genCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="n_emissione, ";
   $sql.="dt_emissione, ";
   $sql.="anno_emissione, ";
   $sql.="dt_scadenza, ";
   $sql.="ges_1, ";
   $sql.="n_stra_1, ";
   $sql.="e_anno_1, ";
   $sql.="dir_anno1, ";
   $sql.="n_rata_1, ";
   $sql.="descr_1, ";
   $sql.="forma_calcolo_1, ";
   $sql.="ges_2, ";
   $sql.="n_stra_2, ";
   $sql.="e_anno_2, ";
   $sql.="dir_anno2, ";
   $sql.="n_rata_2, ";
   $sql.="descr_2, ";
   $sql.="forma_calcolo_2, ";
   $sql.="ges_3, ";
   $sql.="n_stra_3, ";
   $sql.="e_anno_3, ";
   $sql.="dir_anno3, ";
   $sql.="n_rata_3, ";
   $sql.="descr_3, ";
   $sql.="forma_calcolo_3, ";
   $sql.="ges_4, ";
   $sql.="n_stra_4, ";
   $sql.="e_anno_4, ";
   $sql.="dir_anno4, ";
   $sql.="n_rata_4, ";
   $sql.="descr_4, ";
   $sql.="forma_calcolo_4, ";
   $sql.="ges_5, ";
   $sql.="n_stra_5, ";
   $sql.="e_anno_5, ";
   $sql.="dir_anno5, ";
   $sql.="n_rata_5, ";
   $sql.="descr_5, ";
   $sql.="forma_calcolo_5, ";
   $sql.="ges_6, ";
   $sql.="n_stra_6, ";
   $sql.="e_anno_6, ";
   $sql.="dir_anno6, ";
   $sql.="n_rata_6, ";
   $sql.="descr_6, ";
   $sql.="forma_calcolo_6, ";
   $sql.="note_avvisi, ";
   $sql.="note_ricevute, ";
   $sql.="note_ccp, ";
   $sql.="stampa_sn, ";
   $sql.="provvisora_definitava, ";
   $sql.="eserc_preced_1, ";
   $sql.="rata_prec_1, ";
   $sql.="eserc_preced_2, ";
   $sql.="rata_prec_2, ";
   $sql.="eserc_preced_3, ";
   $sql.="rata_prec_3, ";
   $sql.="eserc_preced_4, ";
   $sql.="rata_prec_4, ";
   $sql.="eserc_preced_5, ";
   $sql.="rata_prec_5, ";
   $sql.="eserc_preced_6, ";
   $sql.="rata_prec_6, ";
   $sql.="voce_1, ";
   $sql.="voce_2, ";
   $sql.="voce_3, ";
   $sql.="voce_4, ";
   $sql.="voce_5, ";
   $sql.="voce_6, ";
   $sql.="ccp_1_2 ";
   $sql.="FROM emes_gen ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('emes_gen', $row);
   }
}
