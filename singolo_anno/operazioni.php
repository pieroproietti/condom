<?php
function operazioniCreate($ds, $dd)
{
   $dbstring = 'drop table `operazioni`;';
   echo "Creazione operazioni; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `operazioni` (
         `id_operaz` int(4) DEFAULT NULL,
         `n_spe` int(2) DEFAULT NULL,
         `dt_spe` datetime DEFAULT NULL,
         `cod_spe` varchar(3) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL,
         `cod_ben` int(2) DEFAULT NULL,
         `benef` varchar(100) DEFAULT NULL,
         `benef2` varchar(40) DEFAULT NULL,
         `compet` varchar(1) DEFAULT NULL,
         `note` varchar(80) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `cod_cassa` varchar(3) DEFAULT NULL,
         `natura` varchar(1) DEFAULT NULL,
         `natura2` varchar(7) DEFAULT NULL,
         `cod_for` int(2) DEFAULT NULL,
         `num_fat` varchar(10) DEFAULT NULL,
         `dt_fat` datetime DEFAULT NULL,
         `anno` varchar(9) DEFAULT NULL,
         `imp_calcolato` decimal(10,2) DEFAULT NULL,
         `imp_calcolato_euro` decimal(10,2) DEFAULT NULL,
         `imp_2` decimal(10,2) DEFAULT NULL,
         `imp_2_euro` decimal(10,2) DEFAULT NULL,
         `importo_spese` decimal(10,2) DEFAULT NULL,
         `importo_entrate` decimal(10,2) DEFAULT NULL,
         `importo_crediti` decimal(10,2) DEFAULT NULL,
         `importo_debiti` decimal(10,2) DEFAULT NULL,
         `incluso` varchar(1) DEFAULT NULL,
         `nord` int(2) DEFAULT NULL,
         `temporaneo` varchar(150) DEFAULT NULL,
         `d36_41` varchar(3) DEFAULT NULL,
         `nettovers_rda` varchar(6) DEFAULT NULL,
         `rif_rda` int(4) DEFAULT NULL,
         `importo_euro_ac` decimal(10,2) DEFAULT NULL,
         `importo_euro_770` decimal(10,2) DEFAULT NULL,
         `file_bonifico_telematico` varchar(100) DEFAULT NULL,
         `detraz_36` varchar(2) DEFAULT NULL,
         `etic_axivar` varchar(50) DEFAULT NULL,
         `in_ac` varchar(2) DEFAULT NULL,
         `gestione` varchar(1) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function operazioniCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_operaz, ";
   $sql.="n_spe, ";
   $sql.="dt_spe, ";
   $sql.="cod_spe, ";
   $sql.="tabella, ";
   $sql.="importo, ";
   $sql.="importo_euro, ";
   $sql.="cod_ben, ";
   $sql.="benef, ";
   $sql.="benef2, ";
   $sql.="compet, ";
   $sql.="note, ";
   $sql.="n_stra, ";
   $sql.="cod_cassa, ";
   $sql.="natura, ";
   $sql.="natura2, ";
   $sql.="cod_for, ";
   $sql.="num_fat, ";
   $sql.="dt_fat, ";
   $sql.="anno, ";
   $sql.="imp_calcolato, ";
   $sql.="imp_calcolato_euro, ";
   $sql.="imp_2, ";
   $sql.="imp_2_euro, ";
   $sql.="importo_spese, ";
   $sql.="importo_entrate, ";
   $sql.="importo_crediti, ";
   $sql.="importo_debiti, ";
   $sql.="incluso, ";
   $sql.="nord, ";
   $sql.="temporaneo, ";
   $sql.="d36_41, ";
   $sql.="nettovers_rda, ";
   $sql.="rif_rda, ";
   $sql.="importo_euro_ac, ";
   $sql.="importo_euro_770, ";
   $sql.="file_bonifico_telematico, ";
   $sql.="detraz_36, ";
   $sql.="etic_axivar, ";
   $sql.="in_ac, ";
   $sql.="gestione ";
   $sql.="FROM operazioni ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('operazioni', $row);
   }
}
