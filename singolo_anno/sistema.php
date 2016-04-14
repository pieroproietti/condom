<?php
function sistemaCreate($ds, $dd)
{
   $dbstring = 'drop table `sistema`;';
   echo "Creazione sistema; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `sistema` (
         `nome_amministratore` varchar(30) DEFAULT NULL,
         `citta` varchar(40) DEFAULT NULL,
         `ordinarie_dal` datetime DEFAULT NULL,
         `ordinarie_al` datetime DEFAULT NULL,
         `riscald_dal` datetime DEFAULT NULL,
         `riscald_al` datetime DEFAULT NULL,
         `fincatura_rip_preventivo` varchar(1) DEFAULT NULL,
         `fincatura_avvisi` varchar(1) DEFAULT NULL,
         `fincatura_ricevute` varchar(1) DEFAULT NULL,
         `fincatura_matrici` varchar(1) DEFAULT NULL,
         `tipo_ccp` varchar(2) DEFAULT NULL,
         `ccp_avanti_cond_inquilino` varchar(1) DEFAULT NULL,
         `ccp_parte_da_stampare` varchar(1) DEFAULT NULL,
         `ccp_st_intestaz_si_no` varchar(2) DEFAULT NULL,
         `ccp_sing_da_sopra` int(4) DEFAULT NULL,
         `ccp_sing_da_sx` int(4) DEFAULT NULL,
         `ordinamento_ricevute` varchar(1) DEFAULT NULL,
         `fincatura_rip_consuntivo` varchar(1) DEFAULT NULL,
         `euro` varchar(1) DEFAULT NULL,
         `salto_pagina_scala` varchar(1) DEFAULT NULL,
         `arrotond_importo` int(2) DEFAULT NULL,
         `arrotond_in_euro` decimal(10,2) DEFAULT NULL,
         `arrotond_conguaglio` decimal(10,2) DEFAULT NULL,
         `arrotond_dae` varchar(1) DEFAULT NULL,
         `arrotond_recupero` varchar(1) DEFAULT NULL,
         `num_ccp` varchar(10) DEFAULT NULL,
         `intesazione_ccp` varchar(100) DEFAULT NULL,
         `intestazione stabile` varchar(200) DEFAULT NULL,
         `definiz_conto_economico` varchar(40) DEFAULT NULL,
         `definiz_antic_ammre` varchar(40) DEFAULT NULL,
         `definiz_scale` varchar(5) DEFAULT NULL,
         `definiz_interno` varchar(5) DEFAULT NULL,
         `definiz_amministr` varchar(40) DEFAULT NULL,
         `tipo_intestazione` varchar(1) DEFAULT NULL,
         `escludo_nulli` varchar(1) DEFAULT NULL,
         `griglia_rip` varchar(1) DEFAULT NULL,
         `griglia_prev_cons` varchar(1) DEFAULT NULL,
         `griglia_sit_ver` varchar(1) DEFAULT NULL,
         `griglia_cassa` varchar(1) DEFAULT NULL,
         `griglia_incassi` varchar(1) DEFAULT NULL,
         `griglia_operaz` varchar(1) DEFAULT NULL,
         `griglia_ec` varchar(1) DEFAULT NULL,
         `griglia_acqua` varchar(1) DEFAULT NULL,
         `griglia_riep_casse` varchar(1) DEFAULT NULL,
         `ombra` int(2) DEFAULT NULL,
         `cod_rata_ec` varchar(2) DEFAULT NULL,
         `dim_rip_scala` int(4) DEFAULT NULL,
         `dim_rip_int` int(4) DEFAULT NULL,
         `dim_rip_pro_inq` int(4) DEFAULT NULL,
         `dim_rip_nomecond` int(4) DEFAULT NULL,
         `dim_rip_totdovuto_pr` int(4) DEFAULT NULL,
         `dim_rip_rata1_pr` int(4) DEFAULT NULL,
         `dim_rip_rate_suc` int(4) DEFAULT NULL,
         `dim_rip_totdovuto_co` int(4) DEFAULT NULL,
         `dim_rip_totpagato_co` int(4) DEFAULT NULL,
         `dim_rip_cong` int(4) DEFAULT NULL,
         `dim_rip_cong_pr_dov` int(4) DEFAULT NULL,
         `dim_rip_cong_pr_pag` int(4) DEFAULT NULL,
         `dim_font_rip_prev` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_prev` decimal(10,2) DEFAULT NULL,
         `dim_font_rip_cons` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_cons` decimal(10,2) DEFAULT NULL,
         `assemb_codice_alfabetico` varchar(1) DEFAULT NULL,
         `assemb_tab_propr` varchar(6) DEFAULT NULL,
         `formato_etichette` int(2) DEFAULT NULL,
         `formato_buste` int(2) DEFAULT NULL,
         `formato_etichette_oriz_vert` varchar(1) DEFAULT NULL,
         `formato_etichette_inte_sn` varchar(1) DEFAULT NULL,
         `formato_etichette_r1` int(4) DEFAULT NULL,
         `formato_etichette_c1` int(4) DEFAULT NULL,
         `formato_etichette_r2` int(4) DEFAULT NULL,
         `formato_etichette_c2` int(4) DEFAULT NULL,
         `formato_etichette_alteza` decimal(10,2) DEFAULT NULL,
         `formato_etichette_largh` decimal(10,2) DEFAULT NULL,
         `formato_etichette_colonne` int(2) DEFAULT NULL,
         `formato_etichette_font` decimal(10,2) DEFAULT NULL,
         `formato_etichette_marg_su` decimal(10,2) DEFAULT NULL,
         `formato_etichette_marg_giu` decimal(10,2) DEFAULT NULL,
         `forma_36` varchar(1) DEFAULT NULL,
         `dim_dovuto_36` int(4) DEFAULT NULL,
         `dim_pagato_36` int(4) DEFAULT NULL,
         `dim_spettante_36` int(4) DEFAULT NULL,
         `dim_detraibile_36` int(4) DEFAULT NULL,
         `g_c_1` decimal(10,2) DEFAULT NULL,
         `ar_oriz_vert` varchar(1) DEFAULT NULL,
         `ar_da_sopra` int(4) DEFAULT NULL,
         `ar_da_sinistra` int(4) DEFAULT NULL,
         `ar_mittente_1` varchar(100) DEFAULT NULL,
         `ar_mittente_2` varchar(100) DEFAULT NULL,
         `ar_mittente_3` varchar(100) DEFAULT NULL,
         `ar_mittente_cap` varchar(5) DEFAULT NULL,
         `ar_mittente_citta` varchar(50) DEFAULT NULL,
         `ar_mittente_pr` varchar(2) DEFAULT NULL,
         `ec_cond_inq` varchar(1) DEFAULT NULL,
         `cc_cond_inq` varchar(12) DEFAULT NULL,
         `formato_buste_font_inte` decimal(10,2) DEFAULT NULL,
         `formato_buste_font_ind` decimal(10,2) DEFAULT NULL,
         `dim_rip_cong_corrente` int(4) DEFAULT NULL,
         `dim_rip_cong_attivo` int(4) DEFAULT NULL,
         `dim_rip_cong_passivo` int(4) DEFAULT NULL,
         `chius_definitiva_ord` smallint DEFAULT NULL,
         `chius_definitiva_risc` smallint DEFAULT NULL,
         `fincatura_rip_prev_risc` varchar(1) DEFAULT NULL,
         `fincatura_rip_cons_risc` varchar(1) DEFAULT NULL,
         `arrotond_importo_risc` int(2) DEFAULT NULL,
         `arrotond_in_euro_risc` decimal(10,2) DEFAULT NULL,
         `arrotond_conguaglio_risc` decimal(10,2) DEFAULT NULL,
         `arrotond_dae_risc` varchar(1) DEFAULT NULL,
         `arrotond_recupero_risc` varchar(1) DEFAULT NULL,
         `dim_font_rip_prev_risc` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_prev_risc` decimal(10,2) DEFAULT NULL,
         `dim_font_rip_cons_risc` decimal(10,2) DEFAULT NULL,
         `dim_interlinea_rip_cons_risc` decimal(10,2) DEFAULT NULL,
         `definiz_su_cf_ec` varchar(70) DEFAULT NULL,
         `immagine_firma` varchar(80) DEFAULT NULL,
         `immagine_timbro` varchar(80) DEFAULT NULL,
         `immagine_timbroefirma` varchar(80) DEFAULT NULL,
         `firma_su_corrisp` varchar(2) DEFAULT NULL,
         `firma_su_prosp_contab` varchar(2) DEFAULT NULL,
         `firma_su_ricevute` varchar(2) DEFAULT NULL,
         `firma_su_attest_certificaz` varchar(2) DEFAULT NULL,
         `ar_da_sopra_mittente` int(4) DEFAULT NULL,
         `ar_da_sinistra_mittente` int(4) DEFAULT NULL,
         `ec_fraz_cf` varchar(2) DEFAULT NULL,
         `indirizzo_buste_sn` varchar(2) DEFAULT NULL,
         `immagine_buste_sn` varchar(2) DEFAULT NULL,
         `intestaz_buste` text DEFAULT NULL,
         `copertina_dimensioni` varchar(10) DEFAULT NULL,
         `copertina_sfondo` varchar(30) DEFAULT NULL,
         `ordinamento_ripartizione` varchar(50) DEFAULT NULL,
         `situaz_patrim_compatta_sn` varchar(2) DEFAULT NULL,
         `codici_voci_prev_cons` varchar(2) DEFAULT NULL,
         `avv_orizz_vert` varchar(1) DEFAULT NULL,
         `avv_da_sopra` int(4) DEFAULT NULL,
         `avv_da_sinistra` int(4) DEFAULT NULL,
         `avv_colore` varchar(10) DEFAULT NULL,
         `ric_orizz_vert` varchar(1) DEFAULT NULL,
         `ric_da_sopra` int(4) DEFAULT NULL,
         `ric_da_sinistra` int(4) DEFAULT NULL,
         `ric_colore` varchar(10) DEFAULT NULL,
         `mat_orizz_vert` varchar(1) DEFAULT NULL,
         `mat_da_sopra` int(4) DEFAULT NULL,
         `mat_da_sinistra` int(4) DEFAULT NULL,
         `mat_colore` varchar(10) DEFAULT NULL,
         `in_ec_ord` varchar(2) DEFAULT NULL,
         `in_ec_risc` varchar(2) DEFAULT NULL,
         `dimens_car_prev_cons` varchar(50) DEFAULT NULL,
         `definiz_gest_ordin_ricev` varchar(30) DEFAULT NULL,
         `definiz_gest_ordin_ccp` varchar(10) DEFAULT NULL,
         `cop_orizz_vert` varchar(1) DEFAULT NULL,
         `cop_da_sopra` int(4) DEFAULT NULL,
         `cop_da_sinistra` int(4) DEFAULT NULL,
         `cop_colore` varchar(10) DEFAULT NULL,
         `detr_36_con_imp` varchar(2) DEFAULT NULL,
         `in_sit_compl_ord` varchar(2) DEFAULT NULL,
         `in_sit_compl_risc` varchar(2) DEFAULT NULL,
         `in_consegne_ord` varchar(2) DEFAULT NULL,
         `in_consegne_risc` varchar(2) DEFAULT NULL,
         `testo_lettera_avvisi` text DEFAULT NULL,
         `versione_freccia` varchar(1) DEFAULT NULL,
         `stp_codice_barre` varchar(2) DEFAULT NULL,
         `forma_ec` varchar(1) DEFAULT NULL,
         `stp_iban` varchar(2) DEFAULT NULL,
         `stp_iban_ccp_su_ec` varchar(2) DEFAULT NULL,
         `evidenza_insoliti_su_avv_ccp` varchar(2) DEFAULT NULL,
         `mill_ripart_piccoli` varchar(2) DEFAULT NULL,
         `mill_ripart_inclinati` varchar(2) DEFAULT NULL,
         `sfondo_grigio_alternato` varchar(2) DEFAULT NULL,
         `assemb_con_bordi` varchar(2) DEFAULT NULL,
         `stp_codice_numerico` varchar(2) DEFAULT NULL,
         `fp_forma` varchar(1) DEFAULT NULL,
         `fp_barcode` varchar(1) DEFAULT NULL,
         `fp_interlinea` int(2) DEFAULT NULL,
         `ass_barcode` varchar(1) DEFAULT NULL,
         `stile` varchar(20) DEFAULT NULL,
         `copertina` int(2) DEFAULT NULL,
         `versione_mav` varchar(1) DEFAULT NULL,
         `ass_immagine_sfondo` varchar(1) DEFAULT NULL,
         `ass_contrasto_sfondo` varchar(1) DEFAULT NULL,
         `ec_escl_dett_rate_gest_chiuse` varchar(2) DEFAULT NULL,
         `ec_escl_gest_chiuse_nulle` varchar(2) DEFAULT NULL,
         `definiz_cons_rend` varchar(15) DEFAULT NULL,
         `forma_sp` varchar(15) DEFAULT NULL,
         `ass_pres_cumuli` int(2) DEFAULT NULL,
         `cassa_proposta` varchar(3) DEFAULT NULL,
         `lettera_trasm_sk` int(2) DEFAULT NULL,
         `font_firma` varchar(120) DEFAULT NULL,
         `font_firma_dim` int(2) DEFAULT NULL,
         `font_firma_bold` varchar(2) DEFAULT NULL,
         `font_firma_inclinato` varchar(2) DEFAULT NULL,
         `imm_copertina` varchar(70) DEFAULT NULL,
         `det_36_residenziale` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function sistemaCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="nome_amministratore, ";
   $sql.="citta, ";
   $sql.="ordinarie_dal, ";
   $sql.="ordinarie_al, ";
   $sql.="riscald_dal, ";
   $sql.="riscald_al, ";
   $sql.="fincatura_rip_preventivo, ";
   $sql.="fincatura_avvisi, ";
   $sql.="fincatura_ricevute, ";
   $sql.="fincatura_matrici, ";
   $sql.="tipo_ccp, ";
   $sql.="ccp_avanti_cond_inquilino, ";
   $sql.="ccp_parte_da_stampare, ";
   $sql.="ccp_st_intestaz_si_no, ";
   $sql.="ccp_sing_da_sopra, ";
   $sql.="ccp_sing_da_sx, ";
   $sql.="ordinamento_ricevute, ";
   $sql.="fincatura_rip_consuntivo, ";
   $sql.="euro, ";
   $sql.="salto_pagina_scala, ";
   $sql.="arrotond_importo, ";
   $sql.="arrotond_in_euro, ";
   $sql.="arrotond_conguaglio, ";
   $sql.="arrotond_dae, ";
   $sql.="arrotond_recupero, ";
   $sql.="num_ccp, ";
   $sql.="intesazione_ccp, ";
   $sql.="intestazione stabile, ";
   $sql.="definiz_conto_economico, ";
   $sql.="definiz_antic_ammre, ";
   $sql.="definiz_scale, ";
   $sql.="definiz_interno, ";
   $sql.="definiz_amministr, ";
   $sql.="tipo_intestazione, ";
   $sql.="escludo_nulli, ";
   $sql.="griglia_rip, ";
   $sql.="griglia_prev_cons, ";
   $sql.="griglia_sit_ver, ";
   $sql.="griglia_cassa, ";
   $sql.="griglia_incassi, ";
   $sql.="griglia_operaz, ";
   $sql.="griglia_ec, ";
   $sql.="griglia_acqua, ";
   $sql.="griglia_riep_casse, ";
   $sql.="ombra, ";
   $sql.="cod_rata_ec, ";
   $sql.="dim_rip_scala, ";
   $sql.="dim_rip_int, ";
   $sql.="dim_rip_pro_inq, ";
   $sql.="dim_rip_nomecond, ";
   $sql.="dim_rip_totdovuto_pr, ";
   $sql.="dim_rip_rata1_pr, ";
   $sql.="dim_rip_rate_suc, ";
   $sql.="dim_rip_totdovuto_co, ";
   $sql.="dim_rip_totpagato_co, ";
   $sql.="dim_rip_cong, ";
   $sql.="dim_rip_cong_pr_dov, ";
   $sql.="dim_rip_cong_pr_pag, ";
   $sql.="dim_font_rip_prev, ";
   $sql.="dim_interlinea_rip_prev, ";
   $sql.="dim_font_rip_cons, ";
   $sql.="dim_interlinea_rip_cons, ";
   $sql.="assemb_codice_alfabetico, ";
   $sql.="assemb_tab_propr, ";
   $sql.="formato_etichette, ";
   $sql.="formato_buste, ";
   $sql.="formato_etichette_oriz_vert, ";
   $sql.="formato_etichette_inte_sn, ";
   $sql.="formato_etichette_r1, ";
   $sql.="formato_etichette_c1, ";
   $sql.="formato_etichette_r2, ";
   $sql.="formato_etichette_c2, ";
   $sql.="formato_etichette_alteza, ";
   $sql.="formato_etichette_largh, ";
   $sql.="formato_etichette_colonne, ";
   $sql.="formato_etichette_font, ";
   $sql.="formato_etichette_marg_su, ";
   $sql.="formato_etichette_marg_giu, ";
   $sql.="forma_36, ";
   $sql.="dim_dovuto_36, ";
   $sql.="dim_pagato_36, ";
   $sql.="dim_spettante_36, ";
   $sql.="dim_detraibile_36, ";
   $sql.="g_c_1, ";
   $sql.="ar_oriz_vert, ";
   $sql.="ar_da_sopra, ";
   $sql.="ar_da_sinistra, ";
   $sql.="ar_mittente_1, ";
   $sql.="ar_mittente_2, ";
   $sql.="ar_mittente_3, ";
   $sql.="ar_mittente_cap, ";
   $sql.="ar_mittente_citta, ";
   $sql.="ar_mittente_pr, ";
   $sql.="ec_cond_inq, ";
   $sql.="cc_cond_inq, ";
   $sql.="formato_buste_font_inte, ";
   $sql.="formato_buste_font_ind, ";
   $sql.="dim_rip_cong_corrente, ";
   $sql.="dim_rip_cong_attivo, ";
   $sql.="dim_rip_cong_passivo, ";
   $sql.="chius_definitiva_ord, ";
   $sql.="chius_definitiva_risc, ";
   $sql.="fincatura_rip_prev_risc, ";
   $sql.="fincatura_rip_cons_risc, ";
   $sql.="arrotond_importo_risc, ";
   $sql.="arrotond_in_euro_risc, ";
   $sql.="arrotond_conguaglio_risc, ";
   $sql.="arrotond_dae_risc, ";
   $sql.="arrotond_recupero_risc, ";
   $sql.="dim_font_rip_prev_risc, ";
   $sql.="dim_interlinea_rip_prev_risc, ";
   $sql.="dim_font_rip_cons_risc, ";
   $sql.="dim_interlinea_rip_cons_risc, ";
   $sql.="definiz_su_cf_ec, ";
   $sql.="immagine_firma, ";
   $sql.="immagine_timbro, ";
   $sql.="immagine_timbroefirma, ";
   $sql.="firma_su_corrisp, ";
   $sql.="firma_su_prosp_contab, ";
   $sql.="firma_su_ricevute, ";
   $sql.="firma_su_attest_certificaz, ";
   $sql.="ar_da_sopra_mittente, ";
   $sql.="ar_da_sinistra_mittente, ";
   $sql.="ec_fraz_cf, ";
   $sql.="indirizzo_buste_sn, ";
   $sql.="immagine_buste_sn, ";
   $sql.="intestaz_buste, ";
   $sql.="copertina_dimensioni, ";
   $sql.="copertina_sfondo, ";
   $sql.="ordinamento_ripartizione, ";
   $sql.="situaz_patrim_compatta_sn, ";
   $sql.="codici_voci_prev_cons, ";
   $sql.="avv_orizz_vert, ";
   $sql.="avv_da_sopra, ";
   $sql.="avv_da_sinistra, ";
   $sql.="avv_colore, ";
   $sql.="ric_orizz_vert, ";
   $sql.="ric_da_sopra, ";
   $sql.="ric_da_sinistra, ";
   $sql.="ric_colore, ";
   $sql.="mat_orizz_vert, ";
   $sql.="mat_da_sopra, ";
   $sql.="mat_da_sinistra, ";
   $sql.="mat_colore, ";
   $sql.="in_ec_ord, ";
   $sql.="in_ec_risc, ";
   $sql.="dimens_car_prev_cons, ";
   $sql.="definiz_gest_ordin_ricev, ";
   $sql.="definiz_gest_ordin_ccp, ";
   $sql.="cop_orizz_vert, ";
   $sql.="cop_da_sopra, ";
   $sql.="cop_da_sinistra, ";
   $sql.="cop_colore, ";
   $sql.="detr_36_con_imp, ";
   $sql.="in_sit_compl_ord, ";
   $sql.="in_sit_compl_risc, ";
   $sql.="in_consegne_ord, ";
   $sql.="in_consegne_risc, ";
   $sql.="testo_lettera_avvisi, ";
   $sql.="versione_freccia, ";
   $sql.="stp_codice_barre, ";
   $sql.="forma_ec, ";
   $sql.="stp_iban, ";
   $sql.="stp_iban_ccp_su_ec, ";
   $sql.="evidenza_insoliti_su_avv_ccp, ";
   $sql.="mill_ripart_piccoli, ";
   $sql.="mill_ripart_inclinati, ";
   $sql.="sfondo_grigio_alternato, ";
   $sql.="assemb_con_bordi, ";
   $sql.="stp_codice_numerico, ";
   $sql.="fp_forma, ";
   $sql.="fp_barcode, ";
   $sql.="fp_interlinea, ";
   $sql.="ass_barcode, ";
   $sql.="stile, ";
   $sql.="copertina, ";
   $sql.="versione_mav, ";
   $sql.="ass_immagine_sfondo, ";
   $sql.="ass_contrasto_sfondo, ";
   $sql.="ec_escl_dett_rate_gest_chiuse, ";
   $sql.="ec_escl_gest_chiuse_nulle, ";
   $sql.="definiz_cons_rend, ";
   $sql.="forma_sp, ";
   $sql.="ass_pres_cumuli, ";
   $sql.="cassa_proposta, ";
   $sql.="lettera_trasm_sk, ";
   $sql.="font_firma, ";
   $sql.="font_firma_dim, ";
   $sql.="font_firma_bold, ";
   $sql.="font_firma_inclinato, ";
   $sql.="imm_copertina, ";
   $sql.="det_36_residenziale ";
   $sql.="FROM sistema ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('sistema', $row);
   }
}
