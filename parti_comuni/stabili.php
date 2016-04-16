<?php
function stabiliCreate($ds, $dd)
{
   $dbstring = 'drop table `stabili`;';
   echo "Creazione stabili; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `stabili` (
         `id_stabile` int(4) DEFAULT NULL,
         `cod_stabile` int(2) DEFAULT NULL,
         `denominazione` varchar(40) DEFAULT NULL,
         `indirizzo` varchar(40) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(40) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `codice_fisc` varchar(16) DEFAULT NULL,
         `pos_inps` varchar(16) DEFAULT NULL,
         `n_contribuente` varchar(16) DEFAULT NULL,
         `cf_amministratore` varchar(16) DEFAULT NULL,
         `num_condomini` int(2) DEFAULT NULL,
         `num_scale` int(2) DEFAULT NULL,
         `note1` varchar(90) DEFAULT NULL,
         `nome_directory` varchar(4) DEFAULT NULL,
         `ord_rata_1` smallint DEFAULT NULL,
         `ord_rata_2` smallint DEFAULT NULL,
         `ord_rata_3` smallint DEFAULT NULL,
         `ord_rata_4` smallint DEFAULT NULL,
         `ord_rata_5` smallint DEFAULT NULL,
         `ord_rata_6` smallint DEFAULT NULL,
         `ord_rata_7` smallint DEFAULT NULL,
         `ord_rata_8` smallint DEFAULT NULL,
         `ord_rata_9` smallint DEFAULT NULL,
         `ord_rata_10` smallint DEFAULT NULL,
         `ord_rata_11` smallint DEFAULT NULL,
         `ord_rata_12` smallint DEFAULT NULL,
         `ris_rata_1` smallint DEFAULT NULL,
         `ris_rata_2` smallint DEFAULT NULL,
         `ris_rata_3` smallint DEFAULT NULL,
         `ris_rata_4` smallint DEFAULT NULL,
         `ris_rata_5` smallint DEFAULT NULL,
         `ris_rata_6` smallint DEFAULT NULL,
         `ris_rata_7` smallint DEFAULT NULL,
         `ris_rata_8` smallint DEFAULT NULL,
         `ris_rata_9` smallint DEFAULT NULL,
         `ris_rata_10` smallint DEFAULT NULL,
         `ris_rata_11` smallint DEFAULT NULL,
         `ris_rata_12` smallint DEFAULT NULL,
         `intestazione` text DEFAULT NULL,
         `data_intestaz` smallint DEFAULT NULL,
         `num_ccp` varchar(20) DEFAULT NULL,
         `intestaz_ccp` varchar(120) DEFAULT NULL,
         `autoriz_pptt` varchar(50) DEFAULT NULL,
         `banca` varchar(200) DEFAULT NULL,
         `banca_num_cc` varchar(20) DEFAULT NULL,
         `banca_intest_cc` varchar(100) DEFAULT NULL,
         `abi` varchar(5) DEFAULT NULL,
         `cab` varchar(5) DEFAULT NULL,
         `sia` varchar(5) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `semaforo_cod` int(4) DEFAULT NULL,
         `semaforo_nome` varchar(50) DEFAULT NULL,
         `cin` varchar(1) DEFAULT NULL,
         `banca_prop_f24` varchar(50) DEFAULT NULL,
         `agenzia_prop_f24` varchar(50) DEFAULT NULL,
         `inps_sede_f24` varchar(4) DEFAULT NULL,
         `inps_matricola_f24` varchar(18) DEFAULT NULL,
         `inail_sede_f24` varchar(5) DEFAULT NULL,
         `inail_posiz_f24` varchar(8) DEFAULT NULL,
         `inail_posiz2_f24` varchar(2) DEFAULT NULL,
         `intestaz_f24` varchar(60) DEFAULT NULL,
         `prov_prop_f24` varchar(5) DEFAULT NULL,
         `da_cancellare` varchar(50) DEFAULT NULL,
         `dt_nascita_f24` datetime DEFAULT NULL,
         `sesso_f24` varchar(1) DEFAULT NULL,
         `comune_nasc_f24` varchar(50) DEFAULT NULL,
         `prov_f24` varchar(2) DEFAULT NULL,
         `f24_cc_addebitato` varchar(20) DEFAULT NULL,
         `f24_abi` varchar(5) DEFAULT NULL,
         `f24_cab` varchar(5) DEFAULT NULL,
         `iban_banca` varchar(27) DEFAULT NULL,
         `iban_posta` varchar(27) DEFAULT NULL,
         `selezionato` varchar(2) DEFAULT NULL,
         `selez_stampa` varchar(2) DEFAULT NULL,
         `internet_si_no` varchar(10) DEFAULT NULL,
         `internet_cod_stab` varchar(10) DEFAULT NULL,
         `internet_cod_amm` varchar(5) DEFAULT NULL,
         `internet_cartella` varchar(10) DEFAULT NULL,
         `internet_cod_attivazione` varchar(10) DEFAULT NULL,
         `internet_num_condomini` int(2) DEFAULT NULL,
         `internet_prezzo` int(4) DEFAULT NULL,
         `e_mail_amm_x_770` varchar(50) DEFAULT NULL,
         `cod_comune` varchar(5) DEFAULT NULL,
         `amm_770_cognome` varchar(50) DEFAULT NULL,
         `amm_770_nome` varchar(50) DEFAULT NULL,
         `amm_770_sesso` varchar(1) DEFAULT NULL,
         `amm_770_dt_nascita` datetime DEFAULT NULL,
         `amm_770_comune_nascita` varchar(50) DEFAULT NULL,
         `amm_770_pr_nascita` varchar(2) DEFAULT NULL,
         `amm_770_indir_resid` varchar(50) DEFAULT NULL,
         `amm_770_comune_resid` varchar(50) DEFAULT NULL,
         `amm_770_pr_resid` varchar(2) DEFAULT NULL,
         `amm_770_cap_resid` varchar(5) DEFAULT NULL,
         `amm_770_tel_cell` varchar(15) DEFAULT NULL,
         `privacy_si_no` varchar(10) DEFAULT NULL,
         `privacy_cod_attivazione` varchar(10) DEFAULT NULL,
         `data_invio_770_ags` datetime DEFAULT NULL,
         `banca_fax` varchar(20) DEFAULT NULL,
         `banca_mail` varchar(150) DEFAULT NULL,
         `banca_ca` varchar(150) DEFAULT NULL,
         `indir_autorizzazione` varchar(50) DEFAULT NULL,
         `f24_iban` varchar(27) DEFAULT NULL,
         `ac_tu` varchar(1) DEFAULT NULL,
         `ac_ip` varchar(1) DEFAULT NULL,
         `ac_urb_cat` varchar(10) DEFAULT NULL,
         `ac_foglio` varchar(10) DEFAULT NULL,
         `ac_partic1` varchar(5) DEFAULT NULL,
         `ac_partic2` varchar(4) DEFAULT NULL,
         `ac_sub` varchar(10) DEFAULT NULL,
         `ac_data_acc` datetime DEFAULT NULL,
         `ac_num_acc` varchar(10) DEFAULT NULL,
         `ac_prov_acc` varchar(2) DEFAULT NULL,
         `dt_scadenza_privacy` datetime DEFAULT NULL,
         `dt_scadenza_gesconweb` datetime DEFAULT NULL,
         `pt_cin` varchar(1) DEFAULT NULL,
         `pt_sia` varchar(5) DEFAULT NULL,
         `f24_sia` varchar(5) DEFAULT NULL,
         `new_id` int(4) DEFAULT NULL,
         `catasto_comune` varchar(50) DEFAULT NULL,
         `catasto_pr` varchar(2) DEFAULT NULL,
         `agg_scad_f24` datetime DEFAULT NULL,
         `data_invio_cu_ags` datetime DEFAULT NULL,
         `num_for_cu` int(2) DEFAULT NULL,
         `importo_cu` decimal(10,2) DEFAULT NULL,
         `num_for_770` int(2) DEFAULT NULL,
         `importo_770` decimal(10,2) DEFAULT NULL,
         `prox_cod_cond` int(4) DEFAULT NULL,
         `num_ccp_2` varchar(20) DEFAULT NULL,
         `intestaz_ccp_2` varchar(120) DEFAULT NULL,
         `autoriz_pptt_2` varchar(50) DEFAULT NULL,
         `iban_posta_2` varchar(27) DEFAULT NULL,
         `pt_cin_2` varchar(1) DEFAULT NULL,
         `pt_sia_2` varchar(5) DEFAULT NULL,
         `indir_autorizzazione_2` varchar(50) DEFAULT NULL,
         `inc_glo_dt_inc_acc` varchar(1) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function stabiliCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_stabile, ";
   $sql.="cod_stabile, ";
   $sql.="denominazione, ";
   $sql.="indirizzo, ";
   $sql.="cap, ";
   $sql.="citta, ";
   $sql.="pr, ";
   $sql.="codice_fisc, ";
   $sql.="pos_inps, ";
   $sql.="n_contribuente, ";
   $sql.="cf_amministratore, ";
   $sql.="num_condomini, ";
   $sql.="num_scale, ";
   $sql.="note1, ";
   $sql.="nome_directory, ";
   $sql.="ord_rata_1, ";
   $sql.="ord_rata_2, ";
   $sql.="ord_rata_3, ";
   $sql.="ord_rata_4, ";
   $sql.="ord_rata_5, ";
   $sql.="ord_rata_6, ";
   $sql.="ord_rata_7, ";
   $sql.="ord_rata_8, ";
   $sql.="ord_rata_9, ";
   $sql.="ord_rata_10, ";
   $sql.="ord_rata_11, ";
   $sql.="ord_rata_12, ";
   $sql.="ris_rata_1, ";
   $sql.="ris_rata_2, ";
   $sql.="ris_rata_3, ";
   $sql.="ris_rata_4, ";
   $sql.="ris_rata_5, ";
   $sql.="ris_rata_6, ";
   $sql.="ris_rata_7, ";
   $sql.="ris_rata_8, ";
   $sql.="ris_rata_9, ";
   $sql.="ris_rata_10, ";
   $sql.="ris_rata_11, ";
   $sql.="ris_rata_12, ";
   $sql.="intestazione, ";
   $sql.="data_intestaz, ";
   $sql.="num_ccp, ";
   $sql.="intestaz_ccp, ";
   $sql.="autoriz_pptt, ";
   $sql.="banca, ";
   $sql.="banca_num_cc, ";
   $sql.="banca_intest_cc, ";
   $sql.="abi, ";
   $sql.="cab, ";
   $sql.="sia, ";
   $sql.="note, ";
   $sql.="semaforo_cod, ";
   $sql.="semaforo_nome, ";
   $sql.="cin, ";
   $sql.="banca_prop_f24, ";
   $sql.="agenzia_prop_f24, ";
   $sql.="inps_sede_f24, ";
   $sql.="inps_matricola_f24, ";
   $sql.="inail_sede_f24, ";
   $sql.="inail_posiz_f24, ";
   $sql.="inail_posiz2_f24, ";
   $sql.="intestaz_f24, ";
   $sql.="prov_prop_f24, ";
   $sql.="da_cancellare, ";
   $sql.="dt_nascita_f24, ";
   $sql.="sesso_f24, ";
   $sql.="comune_nasc_f24, ";
   $sql.="prov_f24, ";
   $sql.="f24_cc_addebitato, ";
   $sql.="f24_abi, ";
   $sql.="f24_cab, ";
   $sql.="iban_banca, ";
   $sql.="iban_posta, ";
   $sql.="selezionato, ";
   $sql.="selez_stampa, ";
   $sql.="internet_si_no, ";
   $sql.="internet_cod_stab, ";
   $sql.="internet_cod_amm, ";
   $sql.="internet_cartella, ";
   $sql.="internet_cod_attivazione, ";
   $sql.="internet_num_condomini, ";
   $sql.="internet_prezzo, ";
   $sql.="e_mail_amm_x_770, ";
   $sql.="cod_comune, ";
   $sql.="amm_770_cognome, ";
   $sql.="amm_770_nome, ";
   $sql.="amm_770_sesso, ";
   $sql.="amm_770_dt_nascita, ";
   $sql.="amm_770_comune_nascita, ";
   $sql.="amm_770_pr_nascita, ";
   $sql.="amm_770_indir_resid, ";
   $sql.="amm_770_comune_resid, ";
   $sql.="amm_770_pr_resid, ";
   $sql.="amm_770_cap_resid, ";
   $sql.="amm_770_tel_cell, ";
   $sql.="privacy_si_no, ";
   $sql.="privacy_cod_attivazione, ";
   $sql.="data_invio_770_ags, ";
   $sql.="banca_fax, ";
   $sql.="banca_mail, ";
   $sql.="banca_ca, ";
   $sql.="indir_autorizzazione, ";
   $sql.="f24_iban, ";
   $sql.="ac_tu, ";
   $sql.="ac_ip, ";
   $sql.="ac_urb_cat, ";
   $sql.="ac_foglio, ";
   $sql.="ac_partic1, ";
   $sql.="ac_partic2, ";
   $sql.="ac_sub, ";
   $sql.="ac_data_acc, ";
   $sql.="ac_num_acc, ";
   $sql.="ac_prov_acc, ";
   $sql.="dt_scadenza_privacy, ";
   $sql.="dt_scadenza_gesconweb, ";
   $sql.="pt_cin, ";
   $sql.="pt_sia, ";
   $sql.="f24_sia, ";
   $sql.="new_id, ";
   $sql.="catasto_comune, ";
   $sql.="catasto_pr, ";
   $sql.="agg_scad_f24, ";
   $sql.="data_invio_cu_ags, ";
   $sql.="num_for_cu, ";
   $sql.="importo_cu, ";
   $sql.="num_for_770, ";
   $sql.="importo_770, ";
   $sql.="prox_cod_cond, ";
   $sql.="num_ccp_2, ";
   $sql.="intestaz_ccp_2, ";
   $sql.="autoriz_pptt_2, ";
   $sql.="iban_posta_2, ";
   $sql.="pt_cin_2, ";
   $sql.="pt_sia_2, ";
   $sql.="indir_autorizzazione_2, ";
   $sql.="inc_glo_dt_inc_acc ";
   $sql.="FROM stabili ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('stabili', $row);
   }
}