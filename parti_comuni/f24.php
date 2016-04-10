<?php

function f24Create($ds, $dd) {
        echo "Creazione f24; \r\n";

        $dbstring = "drop table `f24`;";
        $dd->query($dbstring);

        $dbstring = "
                CREATE TABLE `f24` (
                  `id` int(11) DEFAULT NULL,
                  `id_stabile` int(4) DEFAULT NULL,
                  `mese` int(2) DEFAULT NULL,
                  `Anno` int(2) DEFAULT NULL,
                  `Banca_f24` varchar(50) DEFAULT NULL,
                  `Agenzia` varchar(50) DEFAULT NULL,
                  `Dt_pagamento` datetime DEFAULT NULL,
                  `cod_tributo_1` varchar(4) DEFAULT NULL,
                  `cod_tributo_2` varchar(4) DEFAULT NULL,
                  `cod_tributo_3` varchar(4) DEFAULT NULL,
                  `cod_tributo_4` varchar(4) DEFAULT NULL,
                  `cod_tributo_5` varchar(4) DEFAULT NULL,
                  `cod_tributo_6` varchar(4) DEFAULT NULL,
                  `Rateiz_1` varchar(5) DEFAULT NULL,
                  `Rateiz_2` varchar(5) DEFAULT NULL,
                  `Rateiz_3` varchar(5) DEFAULT NULL,
                  `Rateiz_4` varchar(5) DEFAULT NULL,
                  `Rateiz_5` varchar(5) DEFAULT NULL,
                  `Rateiz_6` varchar(5) DEFAULT NULL,
                  `Anno_1` int(2) DEFAULT NULL,
                  `Anno_2` int(2) DEFAULT NULL,
                  `Anno_3` int(2) DEFAULT NULL,
                  `Anno_4` int(2) DEFAULT NULL,
                  `Anno_5` int(2) DEFAULT NULL,
                  `Anno_6` int(2) DEFAULT NULL,
                  `Importo_tributo_deb_1` decimal(8) DEFAULT NULL,
                  `Importo_tributo_deb_2` decimal(8) DEFAULT NULL,
                  `Importo_tributo_deb_3` decimal(8) DEFAULT NULL,
                  `Importo_tributo_deb_4` decimal(8) DEFAULT NULL,
                  `Importo_tributo_deb_5` decimal(8) DEFAULT NULL,
                  `Importo_tributo_deb_6` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_1` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_2` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_3` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_4` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_5` decimal(8) DEFAULT NULL,
                  `Importo_tributo_cre_6` decimal(8) DEFAULT NULL,
                  `sede_inps_1` varchar(4) DEFAULT NULL,
                  `sede_inps_2` varchar(4) DEFAULT NULL,
                  `sede_inps_3` varchar(4) DEFAULT NULL,
                  `sede_inps_4` varchar(4) DEFAULT NULL,
                  `Caus_Contrib_1` varchar(4) DEFAULT NULL,
                  `Caus_Contrib_2` varchar(4) DEFAULT NULL,
                  `Caus_Contrib_3` varchar(4) DEFAULT NULL,
                  `Caus_Contrib_4` varchar(4) DEFAULT NULL,
                  `Matricola_1` varchar(18) DEFAULT NULL,
                  `Matricola_2` varchar(18) DEFAULT NULL,
                  `Matricola_3` varchar(18) DEFAULT NULL,
                  `Matricola_4` varchar(18) DEFAULT NULL,
                  `dal_1` varchar(7) DEFAULT NULL,
                  `dal_2` varchar(7) DEFAULT NULL,
                  `dal_3` varchar(7) DEFAULT NULL,
                  `dal_4` varchar(7) DEFAULT NULL,
                  `al_1` varchar(7) DEFAULT NULL,
                  `al_2` varchar(7) DEFAULT NULL,
                  `al_3` varchar(7) DEFAULT NULL,
                  `al_4` varchar(7) DEFAULT NULL,
                  `Importo_contrib_deb_1` decimal(8) DEFAULT NULL,
                  `Importo_contrib_deb_2` decimal(8) DEFAULT NULL,
                  `Importo_contrib_deb_3` decimal(8) DEFAULT NULL,
                  `Importo_contrib_deb_4` decimal(8) DEFAULT NULL,
                  `Importo_contrib_cre_1` decimal(8) DEFAULT NULL,
                  `Importo_contrib_cre_2` decimal(8) DEFAULT NULL,
                  `Importo_contrib_cre_3` decimal(8) DEFAULT NULL,
                  `Importo_contrib_cre_4` decimal(8) DEFAULT NULL,
                  `cod_regione_1` varchar(2) DEFAULT NULL,
                  `cod_regione_2` varchar(2) DEFAULT NULL,
                  `cod_regione_3` varchar(2) DEFAULT NULL,
                  `Trib_regione_1` varchar(4) DEFAULT NULL,
                  `Trib_regione_2` varchar(4) DEFAULT NULL,
                  `Trib_regione_3` varchar(4) DEFAULT NULL,
                  `rateiz_regione_1` varchar(5) DEFAULT NULL,
                  `rateiz_regione_2` varchar(5) DEFAULT NULL,
                  `rateiz_regione_3` varchar(5) DEFAULT NULL,
                  `anno_regione_1` int(2) DEFAULT NULL,
                  `anno_regione_2` int(2) DEFAULT NULL,
                  `anno_regione_3` int(2) DEFAULT NULL,
                  `importo_regione_deb_1` decimal(8) DEFAULT NULL,
                  `importo_regione_deb_2` decimal(8) DEFAULT NULL,
                  `importo_regione_deb_3` decimal(8) DEFAULT NULL,
                  `importo_regione_cre_1` decimal(8) DEFAULT NULL,
                  `importo_regione_cre_2` decimal(8) DEFAULT NULL,
                  `importo_regione_cre_3` decimal(8) DEFAULT NULL,
                  `ICI_comune` varchar(4) DEFAULT NULL,
                  `ICI_rav` varchar(1) DEFAULT NULL,
                  `ICI_I_var` varchar(1) DEFAULT NULL,
                  `ICI_acc` varchar(1) DEFAULT NULL,
                  `ICI_sal` varchar(1) DEFAULT NULL,
                  `ICI_nimm` int(2) DEFAULT NULL,
                  `ICI_tributo` varchar(4) DEFAULT NULL,
                  `ICI_rateazione` varchar(5) DEFAULT NULL,
                  `ICI_anno` int(2) DEFAULT NULL,
                  `ICI_importo_deb` decimal(8) DEFAULT NULL,
                  `ICI_importo_cre` decimal(8) DEFAULT NULL,
                  `Sede_inail_1` varchar(5) DEFAULT NULL,
                  `Sede_inail_2` varchar(5) DEFAULT NULL,
                  `Sede_inail_3` varchar(5) DEFAULT NULL,
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
                  `importo_inail_deb_1` decimal(8) DEFAULT NULL,
                  `importo_inail_deb_2` decimal(8) DEFAULT NULL,
                  `importo_inail_deb_3` decimal(8) DEFAULT NULL,
                  `importo_inail_cre_1` decimal(8) DEFAULT NULL,
                  `importo_inail_cre_2` decimal(8) DEFAULT NULL,
                  `importo_inail_cre_3` decimal(8) DEFAULT NULL,
                  `Totale_F24` decimal(8) DEFAULT NULL,
                  `prov` varchar(5) DEFAULT NULL,
                  `Dt_versamento` varchar(10) DEFAULT NULL,
                  `Azienda` varchar(5) DEFAULT NULL,
                  `Cab_sportello` varchar(5) DEFAULT NULL,
                  `Addeb_cc_n` varchar(20) DEFAULT NULL,
                  `Addeb_ABI` varchar(5) DEFAULT NULL,
                  `Addeb_CAB` varchar(5) DEFAULT NULL,
                  `Autom_Manuale` varchar(12) DEFAULT NULL,
                  `Rif_f24_mio` int(4) DEFAULT NULL,
                  `ICI_comune2` varchar(4) DEFAULT NULL,
                  `ICI_rav2` varchar(1) DEFAULT NULL,
                  `ICI_I_var2` varchar(1) DEFAULT NULL,
                  `ICI_acc2` varchar(1) DEFAULT NULL,
                  `ICI_sal2` varchar(1) DEFAULT NULL,
                  `ICI_nimm2` int(2) DEFAULT NULL,
                  `ICI_tributo2` varchar(4) DEFAULT NULL,
                  `ICI_rateazione2` varchar(5) DEFAULT NULL,
                  `ICI_anno2` int(2) DEFAULT NULL,
                  `ICI_importo_deb2` decimal(8) DEFAULT NULL,
                  `ICI_importo_cre2` decimal(8) DEFAULT NULL,
                  `Selez_f24` varchar(2) DEFAULT NULL,
                  `Addeb_iban` varchar(27) DEFAULT NULL,
                  `Nome_file_telematico` varchar(100) DEFAULT NULL,
                  `Etic_axivar` varchar(50) DEFAULT NULL,
                  `Di_cui_interessi` decimal(8) DEFAULT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

                  -- ALTER TABLE `affitti` ADD PRIMARY KEY (`id`);
                  -- ALTER TABLE `affitti` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                   ";

                  $dd->query($dbstring);
                  echo "<br/>";
                  echo $dbstring;
                  echo "<br/>";
}

function f24Copy($ds, $dd){
  $sql="SELECT ";
  $sql.="id_stabile, ";
  $sql.="mese, ";
  $sql.="Anno, ";
  $sql.="Banca_f24, ";
  $sql.="Agenzia, ";
  $sql.="Dt_pagamento, ";
  $sql.="cod_tributo_1, ";
  $sql.="cod_tributo_2, ";
  $sql.="cod_tributo_3, ";
  $sql.="cod_tributo_4, ";
  $sql.="cod_tributo_5, ";
  $sql.="cod_tributo_6, ";
  $sql.="Rateiz_1, ";
  $sql.="Rateiz_2, ";
  $sql.="Rateiz_3, ";
  $sql.="Rateiz_4, ";
  $sql.="Rateiz_5, ";
  $sql.="Rateiz_6, ";
  $sql.="Anno_1, ";
  $sql.="Anno_2, ";
  $sql.="Anno_3, ";
  $sql.="Anno_4, ";
  $sql.="Anno_5, ";
  $sql.="Anno_6, ";
  $sql.="Importo_tributo_deb_1, ";
  $sql.="Importo_tributo_deb_2, ";
  $sql.="Importo_tributo_deb_3, ";
  $sql.="Importo_tributo_deb_4, ";
  $sql.="Importo_tributo_deb_5, ";
  $sql.="Importo_tributo_deb_6, ";
  $sql.="Importo_tributo_cre_1, ";
  $sql.="Importo_tributo_cre_2, ";
  $sql.="Importo_tributo_cre_3, ";
  $sql.="Importo_tributo_cre_4, ";
  $sql.="Importo_tributo_cre_5, ";
  $sql.="Importo_tributo_cre_6, ";
  $sql.="sede_inps_1, ";
  $sql.="sede_inps_2, ";
  $sql.="sede_inps_3, ";
  $sql.="sede_inps_4, ";
  $sql.="Caus_Contrib_1, ";
  $sql.="Caus_Contrib_2, ";
  $sql.="Caus_Contrib_3, ";
  $sql.="Caus_Contrib_4, ";
  $sql.="Matricola_1, ";
  $sql.="Matricola_2, ";
  $sql.="Matricola_3, ";
  $sql.="Matricola_4, ";
  $sql.="dal_1, ";
  $sql.="dal_2, ";
  $sql.="dal_3, ";
  $sql.="dal_4, ";
  $sql.="al_1, ";
  $sql.="al_2, ";
  $sql.="al_3, ";
  $sql.="al_4, ";
  $sql.="Importo_contrib_deb_1, ";
  $sql.="Importo_contrib_deb_2, ";
  $sql.="Importo_contrib_deb_3, ";
  $sql.="Importo_contrib_deb_4, ";
  $sql.="Importo_contrib_cre_1, ";
  $sql.="Importo_contrib_cre_2, ";
  $sql.="Importo_contrib_cre_3, ";
  $sql.="Importo_contrib_cre_4, ";
  $sql.="cod_regione_1, ";
  $sql.="cod_regione_2, ";
  $sql.="cod_regione_3, ";
  $sql.="Trib_regione_1, ";
  $sql.="Trib_regione_2, ";
  $sql.="Trib_regione_3, ";
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
  $sql.="ICI_comune, ";
  $sql.="ICI_rav, ";
  $sql.="ICI_I_var, ";
  $sql.="ICI_acc, ";
  $sql.="ICI_sal, ";
  $sql.="ICI_nimm, ";
  $sql.="ICI_tributo, ";
  $sql.="ICI_rateazione, ";
  $sql.="ICI_anno, ";
  $sql.="ICI_importo_deb, ";
  $sql.="ICI_importo_cre, ";
  $sql.="Sede_inail_1, ";
  $sql.="Sede_inail_2, ";
  $sql.="Sede_inail_3, ";
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
  $sql.="Totale_F24, ";
  $sql.="prov, ";
  $sql.="Dt_versamento, ";
  $sql.="Azienda, ";
  $sql.="Cab_sportello, ";
  $sql.="Addeb_cc_n, ";
  $sql.="Addeb_ABI, ";
  $sql.="Addeb_CAB, ";
  $sql.="Autom_Manuale, ";
  $sql.="Rif_f24_mio, ";
  $sql.="ICI_comune2, ";
  $sql.="ICI_rav2, ";
  $sql.="ICI_I_var2, ";
  $sql.="ICI_acc2, ";
  $sql.="ICI_sal2, ";
  $sql.="ICI_nimm2, ";
  $sql.="ICI_tributo2, ";
  $sql.="ICI_rateazione2, ";
  $sql.="ICI_anno2, ";
  $sql.="ICI_importo_deb2, ";
  $sql.="ICI_importo_cre2, ";
  $sql.="Selez_f24, ";
  $sql.="Addeb_iban, ";
  $sql.="Nome_file_telematico, ";
  $sql.="Etic_axivar, ";
  $sql.="Di_cui_interessi ";
  $sql.="FROM f24 ";
  $sql.="WHERE 1";

  echo "<br/>";
  echo $sql;
  echo "<br/>";

  $rows = $ds->query($sql, PDO::FETCH_ASSOC);
  foreach ($rows as $row) {
    $dd->insert("f24", $row);
  }
}

?>
