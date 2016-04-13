<?php
function fatt_multiple_dettCreate($ds, $dd)
{
   $dbstring = 'drop table `fatt_multiple_dett`;';
   echo "Creazione fatt_multiple_dett; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `fatt_multiple_dett` (
         `id_fatture` int(4) DEFAULT NULL,
         `id_stabile` int(4) DEFAULT NULL,
         `riferimento` int(4) DEFAULT NULL,
         `cod_fornitore` int(4) DEFAULT NULL,
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
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function fatt_multiple_dettCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_fatture, ";
   $sql.="id_stabile, ";
   $sql.="riferimento, ";
   $sql.="cod_fornitore, ";
   $sql.="data_fattura, ";
   $sql.="data_pagamento, ";
   $sql.="num_fattura, ";
   $sql.="descrizione_sintetica, ";
   $sql.="descriz_corpo, ";
   $sql.="conteggi_a_m, ";
   $sql.="onorario_1, ";
   $sql.="aliq_4perc_1, ";
   $sql.="importo_4perc_1, ";
   $sql.="aliq_cassa_1, ";
   $sql.="importo_cassa_1, ";
   $sql.="imponibile_1, ";
   $sql.="aliq_iva_1, ";
   $sql.="importo_iva_1, ";
   $sql.="totale_fattura_1, ";
   $sql.="onorario_2, ";
   $sql.="aliq_4perc_2, ";
   $sql.="importo_4perc_2, ";
   $sql.="aliq_cassa_2, ";
   $sql.="importo_cassa_2, ";
   $sql.="imponibile_2, ";
   $sql.="aliq_iva_2, ";
   $sql.="importo_iva_2, ";
   $sql.="totale_fattura_2, ";
   $sql.="onorario_3, ";
   $sql.="aliq_4perc_3, ";
   $sql.="importo_4perc_3, ";
   $sql.="aliq_cassa_3, ";
   $sql.="importo_cassa_3, ";
   $sql.="imponibile_3, ";
   $sql.="aliq_iva_3, ";
   $sql.="importo_iva_3, ";
   $sql.="totale_fattura_3, ";
   $sql.="onorario_4, ";
   $sql.="aliq_4perc_4, ";
   $sql.="importo_4perc_4, ";
   $sql.="aliq_cassa_4, ";
   $sql.="importo_cassa_4, ";
   $sql.="imponibile_4, ";
   $sql.="aliq_iva_4, ";
   $sql.="importo_iva_4, ";
   $sql.="totale_fattura_4, ";
   $sql.="onorario_5, ";
   $sql.="aliq_4perc_5, ";
   $sql.="importo_4perc_5, ";
   $sql.="aliq_cassa_5, ";
   $sql.="importo_cassa_5, ";
   $sql.="imponibile_5, ";
   $sql.="aliq_iva_5, ";
   $sql.="importo_iva_5, ";
   $sql.="totale_fattura_5, ";
   $sql.="onorario_t, ";
   $sql.="importo_4perc_t, ";
   $sql.="importo_cassa_t, ";
   $sql.="imponibile_t, ";
   $sql.="importo_iva_t, ";
   $sql.="totale_fattura_t, ";
   $sql.="aliq_rda, ";
   $sql.="importo_rda, ";
   $sql.="rimborsi, ";
   $sql.="importo_netto, ";
   $sql.="prof_occas, ";
   $sql.="id_anno, ";
   $sql.="voce_compenso_1, ";
   $sql.="voce_compenso_2, ";
   $sql.="voce_compenso_3, ";
   $sql.="voce_compenso_4, ";
   $sql.="voce_compenso_5, ";
   $sql.="voce_rda, ";
   $sql.="reg_compenso, ";
   $sql.="reg_compenso_1, ";
   $sql.="reg_compenso_2, ";
   $sql.="reg_compenso_3, ";
   $sql.="reg_compenso_4, ";
   $sql.="reg_compenso_5, ";
   $sql.="reg_rda_meno, ";
   $sql.="reg_rda_debito, ";
   $sql.="reg_gestione, ";
   $sql.="reg_nstra, ";
   $sql.="cassa_compenso, ";
   $sql.="cassa_rda, ";
   $sql.="rif_f24, ";
   $sql.="note, ";
   $sql.="rif_fatt_mio, ";
   $sql.="compet_compenso, ";
   $sql.="compet_rda, ";
   $sql.="bonifico_diretto, ";
   $sql.="file_bonifico_telematico, ";
   $sql.="etic_axivar, ";
   $sql.="descrizione_reg_1, ";
   $sql.="descrizione_reg_2, ";
   $sql.="descrizione_reg_3, ";
   $sql.="descrizione_reg_4, ";
   $sql.="descrizione_reg_5 ";
   $sql.="FROM fatt_multiple_dett ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('fatt_multiple_dett', $row);
   }
}
