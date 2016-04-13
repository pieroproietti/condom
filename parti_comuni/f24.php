<?php 
function f24Create($ds, $dd)
{
   $dbstring = 'drop table `f24`;';
   echo "Creazione f24; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `f24` (
         `id_stabile` int(4) DEFAULT NULL,
         `mese` int(2) DEFAULT NULL,
         `anno` int(2) DEFAULT NULL,
         `banca_f24` varchar(50) DEFAULT NULL,
         `agenzia` varchar(50) DEFAULT NULL,
         `dt_pagamento` datetime DEFAULT NULL,
         `cod_tributo_1` varchar(4) DEFAULT NULL,
         `cod_tributo_2` varchar(4) DEFAULT NULL,
         `cod_tributo_3` varchar(4) DEFAULT NULL,
         `cod_tributo_4` varchar(4) DEFAULT NULL,
         `cod_tributo_5` varchar(4) DEFAULT NULL,
         `cod_tributo_6` varchar(4) DEFAULT NULL,
         `rateiz_1` varchar(5) DEFAULT NULL,
         `rateiz_2` varchar(5) DEFAULT NULL,
         `rateiz_3` varchar(5) DEFAULT NULL,
         `rateiz_4` varchar(5) DEFAULT NULL,
         `rateiz_5` varchar(5) DEFAULT NULL,
         `rateiz_6` varchar(5) DEFAULT NULL,
         `anno_1` int(2) DEFAULT NULL,
         `anno_2` int(2) DEFAULT NULL,
         `anno_3` int(2) DEFAULT NULL,
         `anno_4` int(2) DEFAULT NULL,
         `anno_5` int(2) DEFAULT NULL,
         `anno_6` int(2) DEFAULT NULL,
         `importo_tributo_deb_1` decimal(10,2) DEFAULT NULL,
         `importo_tributo_deb_2` decimal(10,2) DEFAULT NULL,
         `importo_tributo_deb_3` decimal(10,2) DEFAULT NULL,
         `importo_tributo_deb_4` decimal(10,2) DEFAULT NULL,
         `importo_tributo_deb_5` decimal(10,2) DEFAULT NULL,
         `importo_tributo_deb_6` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_1` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_2` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_3` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_4` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_5` decimal(10,2) DEFAULT NULL,
         `importo_tributo_cre_6` decimal(10,2) DEFAULT NULL,
         `sede_inps_1` varchar(4) DEFAULT NULL,
         `sede_inps_2` varchar(4) DEFAULT NULL,
         `sede_inps_3` varchar(4) DEFAULT NULL,
         `sede_inps_4` varchar(4) DEFAULT NULL,
         `caus_contrib_1` varchar(4) DEFAULT NULL,
         `caus_contrib_2` varchar(4) DEFAULT NULL,
         `caus_contrib_3` varchar(4) DEFAULT NULL,
         `caus_contrib_4` varchar(4) DEFAULT NULL,
         `matricola_1` varchar(18) DEFAULT NULL,
         `matricola_2` varchar(18) DEFAULT NULL,
         `matricola_3` varchar(18) DEFAULT NULL,
         `matricola_4` varchar(18) DEFAULT NULL,
         `dal_1` varchar(7) DEFAULT NULL,
         `dal_2` varchar(7) DEFAULT NULL,
         `dal_3` varchar(7) DEFAULT NULL,
         `dal_4` varchar(7) DEFAULT NULL,
         `al_1` varchar(7) DEFAULT NULL,
         `al_2` varchar(7) DEFAULT NULL,
         `al_3` varchar(7) DEFAULT NULL,
         `al_4` varchar(7) DEFAULT NULL,
         `importo_contrib_deb_1` decimal(10,2) DEFAULT NULL,
         `importo_contrib_deb_2` decimal(10,2) DEFAULT NULL,
         `importo_contrib_deb_3` decimal(10,2) DEFAULT NULL,
         `importo_contrib_deb_4` decimal(10,2) DEFAULT NULL,
         `importo_contrib_cre_1` decimal(10,2) DEFAULT NULL,
         `importo_contrib_cre_2` decimal(10,2) DEFAULT NULL,
         `importo_contrib_cre_3` decimal(10,2) DEFAULT NULL,
         `importo_contrib_cre_4` decimal(10,2) DEFAULT NULL,
         `cod_regione_1` varchar(2) DEFAULT NULL,
         `cod_regione_2` varchar(2) DEFAULT NULL,
         `cod_regione_3` varchar(2) DEFAULT NULL,
         `trib_regione_1` varchar(4) DEFAULT NULL,
         `trib_regione_2` varchar(4) DEFAULT NULL,
         `trib_regione_3` varchar(4) DEFAULT NULL,
         `rateiz_regione_1` varchar(5) DEFAULT NULL,
         `rateiz_regione_2` varchar(5) DEFAULT NULL,
         `rateiz_regione_3` varchar(5) DEFAULT NULL,
         `anno_regione_1` int(2) DEFAULT NULL,
         `anno_regione_2` int(2) DEFAULT NULL,
         `anno_regione_3` int(2) DEFAULT NULL,
         `importo_regione_deb_1` decimal(10,2) DEFAULT NULL,
         `importo_regione_deb_2` decimal(10,2) DEFAULT NULL,
         `importo_regione_deb_3` decimal(10,2) DEFAULT NULL,
         `importo_regione_cre_1` decimal(10,2) DEFAULT NULL,
         `importo_regione_cre_2` decimal(10,2) DEFAULT NULL,
         `importo_regione_cre_3` decimal(10,2) DEFAULT NULL,
         `ici_comune` varchar(4) DEFAULT NULL,
         `ici_rav` varchar(1) DEFAULT NULL,
         `ici_i_var` varchar(1) DEFAULT NULL,
         `ici_acc` varchar(1) DEFAULT NULL,
         `ici_sal` varchar(1) DEFAULT NULL,
         `ici_nimm` int(2) DEFAULT NULL,
         `ici_tributo` varchar(4) DEFAULT NULL,
         `ici_rateazione` varchar(5) DEFAULT NULL,
         `ici_anno` int(2) DEFAULT NULL,
         `ici_importo_deb` decimal(10,2) DEFAULT NULL,
         `ici_importo_cre` decimal(10,2) DEFAULT NULL,
         `sede_inail_1` varchar(5) DEFAULT NULL,
         `sede_inail_2` varchar(5) DEFAULT NULL,
         `sede_inail_3` varchar(5) DEFAULT NULL,
         `op_cod_1` varchar(8) DEFAULT NULL,
         `op_cod_2` varchar(8) DEFAULT NULL,
         `op_cod_3` varchar(8) DEFAULT NULL,
         `s_cod_1` varchar(2) DEFAULT NULL,
         `s_cod_2` varchar(2) DEFAULT NULL,
         `s_cod_3` varchar(2) DEFAULT NULL,
         `num_riferimento_1` varchar(9) DEFAULT NULL,
         `num_riferimento_2` varchar(9) DEFAULT NULL,
         `num_riferimento_3` varchar(9) DEFAULT NULL,
         `causale_1` varchar(2) DEFAULT NULL,
         `causale_2` varchar(2) DEFAULT NULL,
         `causale_3` varchar(2) DEFAULT NULL,
         `importo_inail_deb_1` decimal(10,2) DEFAULT NULL,
         `importo_inail_deb_2` decimal(10,2) DEFAULT NULL,
         `importo_inail_deb_3` decimal(10,2) DEFAULT NULL,
         `importo_inail_cre_1` decimal(10,2) DEFAULT NULL,
         `importo_inail_cre_2` decimal(10,2) DEFAULT NULL,
         `importo_inail_cre_3` decimal(10,2) DEFAULT NULL,
         `totale_f24` decimal(10,2) DEFAULT NULL,
         `prov` varchar(5) DEFAULT NULL,
         `dt_versamento` varchar(10) DEFAULT NULL,
         `azienda` varchar(5) DEFAULT NULL,
         `cab_sportello` varchar(5) DEFAULT NULL,
         `addeb_cc_n` varchar(20) DEFAULT NULL,
         `addeb_abi` varchar(5) DEFAULT NULL,
         `addeb_cab` varchar(5) DEFAULT NULL,
         `autom_manuale` varchar(12) DEFAULT NULL,
         `rif_f24_mio` int(4) DEFAULT NULL,
         `ici_comune2` varchar(4) DEFAULT NULL,
         `ici_rav2` varchar(1) DEFAULT NULL,
         `ici_i_var2` varchar(1) DEFAULT NULL,
         `ici_acc2` varchar(1) DEFAULT NULL,
         `ici_sal2` varchar(1) DEFAULT NULL,
         `ici_nimm2` int(2) DEFAULT NULL,
         `ici_tributo2` varchar(4) DEFAULT NULL,
         `ici_rateazione2` varchar(5) DEFAULT NULL,
         `ici_anno2` int(2) DEFAULT NULL,
         `ici_importo_deb2` decimal(10,2) DEFAULT NULL,
         `ici_importo_cre2` decimal(10,2) DEFAULT NULL,
         `selez_f24` varchar(2) DEFAULT NULL,
         `addeb_iban` varchar(27) DEFAULT NULL,
         `nome_file_telematico` varchar(100) DEFAULT NULL,
         `etic_axivar` varchar(50) DEFAULT NULL,
         `di_cui_interessi` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function f24Copy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_stabile, ";
   $sql.="mese, ";
   $sql.="anno, ";
   $sql.="banca_f24, ";
   $sql.="agenzia, ";
   $sql.="dt_pagamento, ";
   $sql.="cod_tributo_1, ";
   $sql.="cod_tributo_2, ";
   $sql.="cod_tributo_3, ";
   $sql.="cod_tributo_4, ";
   $sql.="cod_tributo_5, ";
   $sql.="cod_tributo_6, ";
   $sql.="rateiz_1, ";
   $sql.="rateiz_2, ";
   $sql.="rateiz_3, ";
   $sql.="rateiz_4, ";
   $sql.="rateiz_5, ";
   $sql.="rateiz_6, ";
   $sql.="anno_1, ";
   $sql.="anno_2, ";
   $sql.="anno_3, ";
   $sql.="anno_4, ";
   $sql.="anno_5, ";
   $sql.="anno_6, ";
   $sql.="importo_tributo_deb_1, ";
   $sql.="importo_tributo_deb_2, ";
   $sql.="importo_tributo_deb_3, ";
   $sql.="importo_tributo_deb_4, ";
   $sql.="importo_tributo_deb_5, ";
   $sql.="importo_tributo_deb_6, ";
   $sql.="importo_tributo_cre_1, ";
   $sql.="importo_tributo_cre_2, ";
   $sql.="importo_tributo_cre_3, ";
   $sql.="importo_tributo_cre_4, ";
   $sql.="importo_tributo_cre_5, ";
   $sql.="importo_tributo_cre_6, ";
   $sql.="sede_inps_1, ";
   $sql.="sede_inps_2, ";
   $sql.="sede_inps_3, ";
   $sql.="sede_inps_4, ";
   $sql.="caus_contrib_1, ";
   $sql.="caus_contrib_2, ";
   $sql.="caus_contrib_3, ";
   $sql.="caus_contrib_4, ";
   $sql.="matricola_1, ";
   $sql.="matricola_2, ";
   $sql.="matricola_3, ";
   $sql.="matricola_4, ";
   $sql.="dal_1, ";
   $sql.="dal_2, ";
   $sql.="dal_3, ";
   $sql.="dal_4, ";
   $sql.="al_1, ";
   $sql.="al_2, ";
   $sql.="al_3, ";
   $sql.="al_4, ";
   $sql.="importo_contrib_deb_1, ";
   $sql.="importo_contrib_deb_2, ";
   $sql.="importo_contrib_deb_3, ";
   $sql.="importo_contrib_deb_4, ";
   $sql.="importo_contrib_cre_1, ";
   $sql.="importo_contrib_cre_2, ";
   $sql.="importo_contrib_cre_3, ";
   $sql.="importo_contrib_cre_4, ";
   $sql.="cod_regione_1, ";
   $sql.="cod_regione_2, ";
   $sql.="cod_regione_3, ";
   $sql.="trib_regione_1, ";
   $sql.="trib_regione_2, ";
   $sql.="trib_regione_3, ";
   $sql.="rateiz_regione_1, ";
   $sql.="rateiz_regione_2, ";
   $sql.="rateiz_regione_3, ";
   $sql.="anno_regione_1, ";
   $sql.="anno_regione_2, ";
   $sql.="anno_regione_3, ";
   $sql.="importo_regione_deb_1, ";
   $sql.="importo_regione_deb_2, ";
   $sql.="importo_regione_deb_3, ";
   $sql.="importo_regione_cre_1, ";
   $sql.="importo_regione_cre_2, ";
   $sql.="importo_regione_cre_3, ";
   $sql.="ici_comune, ";
   $sql.="ici_rav, ";
   $sql.="ici_i_var, ";
   $sql.="ici_acc, ";
   $sql.="ici_sal, ";
   $sql.="ici_nimm, ";
   $sql.="ici_tributo, ";
   $sql.="ici_rateazione, ";
   $sql.="ici_anno, ";
   $sql.="ici_importo_deb, ";
   $sql.="ici_importo_cre, ";
   $sql.="sede_inail_1, ";
   $sql.="sede_inail_2, ";
   $sql.="sede_inail_3, ";
   $sql.="op_cod_1, ";
   $sql.="op_cod_2, ";
   $sql.="op_cod_3, ";
   $sql.="s_cod_1, ";
   $sql.="s_cod_2, ";
   $sql.="s_cod_3, ";
   $sql.="num_riferimento_1, ";
   $sql.="num_riferimento_2, ";
   $sql.="num_riferimento_3, ";
   $sql.="causale_1, ";
   $sql.="causale_2, ";
   $sql.="causale_3, ";
   $sql.="importo_inail_deb_1, ";
   $sql.="importo_inail_deb_2, ";
   $sql.="importo_inail_deb_3, ";
   $sql.="importo_inail_cre_1, ";
   $sql.="importo_inail_cre_2, ";
   $sql.="importo_inail_cre_3, ";
   $sql.="totale_f24, ";
   $sql.="prov, ";
   $sql.="dt_versamento, ";
   $sql.="azienda, ";
   $sql.="cab_sportello, ";
   $sql.="addeb_cc_n, ";
   $sql.="addeb_abi, ";
   $sql.="addeb_cab, ";
   $sql.="autom_manuale, ";
   $sql.="rif_f24_mio, ";
   $sql.="ici_comune2, ";
   $sql.="ici_rav2, ";
   $sql.="ici_i_var2, ";
   $sql.="ici_acc2, ";
   $sql.="ici_sal2, ";
   $sql.="ici_nimm2, ";
   $sql.="ici_tributo2, ";
   $sql.="ici_rateazione2, ";
   $sql.="ici_anno2, ";
   $sql.="ici_importo_deb2, ";
   $sql.="ici_importo_cre2, ";
   $sql.="selez_f24, ";
   $sql.="addeb_iban, ";
   $sql.="nome_file_telematico, ";
   $sql.="etic_axivar, ";
   $sql.="di_cui_interessi ";
   $sql.="FROM f24 ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('f24', $row);
   }
}
