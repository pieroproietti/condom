<?php

function stabiliCrea($dd){

$sql="
CREATE TABLE `stabili` (
  `id` int(11) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `codice` int(2) NOT NULL,
  `denominazione` varchar(40) DEFAULT NULL,
  `indirizzo` varchar(40) DEFAULT NULL,
  `cap` varchar(5) DEFAULT NULL,
  `comune` varchar(40) DEFAULT NULL,
  `provincia` varchar(2) DEFAULT NULL,
  `codice_fiscale` varchar(16) DEFAULT NULL,
  `posizione_inps` varchar(16) DEFAULT NULL,
  `numero_contribuente` varchar(16) DEFAULT NULL,
  `codice_fiscale_amministratore` varchar(16) DEFAULT NULL,
  `numero_condomini` int(2) DEFAULT NULL,
  `numero_scale` int(2) DEFAULT NULL,
  -- `not_used_annotazioni` varchar(90) DEFAULT NULL,
  `cartella` varchar(4) DEFAULT NULL,
  `is_rata_ordinaria_1` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_2` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_3` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_4` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_5` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_6` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_7` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_8` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_9` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_10` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_11` smallint(6) DEFAULT NULL,
  `is_rata_ordinaria_12` smallint(6) DEFAULT NULL,
  `is_rata_ris_1` smallint(6) DEFAULT NULL,
  `is_rata_ris_2` smallint(6) DEFAULT NULL,
  `is_rata_ris_3` smallint(6) DEFAULT NULL,
  `is_rata_ris_4` smallint(6) DEFAULT NULL,
  `is_rata_ris_5` smallint(6) DEFAULT NULL,
  `is_rata_ris_6` smallint(6) DEFAULT NULL,
  `is_rata_ris_7` smallint(6) DEFAULT NULL,
  `is_rata_ris_8` smallint(6) DEFAULT NULL,
  `is_rata_ris_9` smallint(6) DEFAULT NULL,
  `is_rata_ris_10` smallint(6) DEFAULT NULL,
  `is_rata_ris_11` smallint(6) DEFAULT NULL,
  `is_rata_ris_12` smallint(6) DEFAULT NULL,
  `intestazione` text,
  `is_intestazione` smallint(6) DEFAULT NULL,
  `ccp_numero` varchar(20) DEFAULT NULL,
  `ccp_intestazione` varchar(120) DEFAULT NULL,
  `ccp_autorizzazione` varchar(50) DEFAULT NULL,
  `ccp_iban` varchar(27) DEFAULT NULL,
  `banca` varchar(200) DEFAULT NULL,
  `banca_numero_cc` varchar(20) DEFAULT NULL,
  `banca_intestazione_cc` varchar(100) DEFAULT NULL,
  `banca_abi` varchar(5) DEFAULT NULL,
  `banca_cab` varchar(5) DEFAULT NULL,
  `banca_iban` varchar(27) DEFAULT NULL,
  -- `not_used_semaforo_cod` int(4) DEFAULT NULL,
  -- `not_used_semaforo_nome` varchar(50) DEFAULT NULL,
  -- `not_used_cin` varchar(1) DEFAULT NULL,
  `annotazioni` text,
  `f24_banca` varchar(50) DEFAULT NULL,
  `f24_agenzia` varchar(50) DEFAULT NULL,
  `f24_banca_abi` varchar(5) DEFAULT NULL,
  `f24_banca_cab` varchar(5) DEFAULT NULL,
  `f24_banca_cc` varchar(20) DEFAULT NULL,
  `f24_iban` varchar(27) DEFAULT NULL,
  -- `not_used_inps_sede_f24` varchar(4) DEFAULT NULL,
  -- `not_used_inps_matricola_f24` varchar(18) DEFAULT NULL,
  -- `not_used_inail_sede_f24` varchar(5) DEFAULT NULL,
  -- `not_used_inail_posiz_f24` varchar(8) DEFAULT NULL,
  -- `not_used_inail_posiz2_f24` varchar(2) DEFAULT NULL,
  `f24_sia` varchar(5) DEFAULT NULL,
  `f24_intestazione` varchar(60) DEFAULT NULL,
  `f24_provincia` varchar(5) DEFAULT NULL,
  `f24_scadenza_del` datetime DEFAULT NULL,
  -- `not_used_da_cancellare` varchar(50) DEFAULT NULL,
  -- `not_used_dt_nascita_f24` datetime DEFAULT NULL,
  -- `not_used_sesso_f24` varchar(1) DEFAULT NULL,
  -- `not_used_comune_nasc_f24` varchar(50) DEFAULT NULL,
  -- `not_used_prov_f24` varchar(2) DEFAULT NULL,
  -- `not_used_selezionato` varchar(2) DEFAULT NULL,
  -- `not_used_selez_stampa` varchar(2) DEFAULT NULL,
  -- `not_used_internet_si_no` varchar(10) DEFAULT NULL,
  -- `not_used_internet_cod_stab` varchar(10) DEFAULT NULL,
  -- `not_used_internet_cod_amm` varchar(5) DEFAULT NULL,
  -- `not_used_internet_cartella` varchar(10) DEFAULT NULL,
  -- `not_used_internet_cod_attivazione` varchar(10) DEFAULT NULL,
  -- `not_used_internet_num_condomini` int(2) DEFAULT NULL,
  -- `not_used_internet_prezzo` int(4) DEFAULT NULL,
  `amministratore_770_email` varchar(50) DEFAULT NULL,
  `amministratore_770_cognome` varchar(50) DEFAULT NULL,
  `amministratore_770_nome` varchar(50) DEFAULT NULL,
  `amministratore_770_sesso` varchar(1) DEFAULT NULL,
  `amministratore_770_nato_il` datetime DEFAULT NULL,
  `amministratore_770_nato_a` varchar(50) DEFAULT NULL,
  `amministratore_770_nato_a_codice` varchar(5) DEFAULT NULL,
  `amministratore_770_nato_provincia` varchar(2) DEFAULT NULL,
  `amministratore_770_residenza_indirizzo` varchar(50) DEFAULT NULL,
  `amministratore_770_residenza_comune` varchar(50) DEFAULT NULL,
  `amministratore_770_residenza_provincia` varchar(2) DEFAULT NULL,
  `amministratore_770_residenza_cap` varchar(5) DEFAULT NULL,
  `amministratore_770_cellulare` varchar(15) DEFAULT NULL,
  -- `not_used_privacy_si_no` varchar(10) DEFAULT NULL,
  -- `not_used_privacy_cod_attivazione` varchar(10) DEFAULT NULL,
  -- `not_used_data_invio_770_ags` datetime DEFAULT NULL,
  -- `not_used_banca_fax` varchar(20) DEFAULT NULL,
  -- `not_used_banca_mail` varchar(150) DEFAULT NULL,
  -- `not_used_banca_ca` varchar(150) DEFAULT NULL,
  `indirizzo_autorizzazione` varchar(50) DEFAULT NULL,
  `catasto_terreni_urbano` varchar(1) DEFAULT NULL,
  `catasto_ip` varchar(1) DEFAULT NULL,
  `catasto_codice` varchar(10) DEFAULT NULL,
  `catasto_foglio` varchar(10) DEFAULT NULL,
  `catasto_particella` varchar(5) DEFAULT NULL,
  -- `not_used_ac_partic2` varchar(4) DEFAULT NULL,
  `catasto_sub` varchar(10) DEFAULT NULL,
  -- `not_used_ac_data_acc` datetime DEFAULT NULL,
  -- `not_used_ac_num_acc` varchar(10) DEFAULT NULL,
  -- `not_used_ac_prov_acc` varchar(2) DEFAULT NULL,
  -- `not_used_dt_scadenza_privacy` datetime DEFAULT NULL,
  -- `not_used_dt_scadenza_gesconweb` datetime DEFAULT NULL,
  -- `not_used_pt_cin` varchar(1) DEFAULT NULL,
  -- `not_used_pt_sia` varchar(5) DEFAULT NULL,
  -- `not_used_new_id` int(4) DEFAULT NULL,
  `catasto_comune` varchar(50) DEFAULT NULL,
  `catasto_provincia` varchar(2) DEFAULT NULL
  -- `not_used_data_invio_cu_ags` datetime DEFAULT NULL,
  -- `not_used_num_for_cu` int(2) DEFAULT NULL,
  -- `not_used_importo_cu` decimal(10,2) DEFAULT NULL,
  -- `not_used_num_for_770` int(2) DEFAULT NULL,
  -- `not_used_importo_770` decimal(10,2) DEFAULT NULL,
  -- `not_used_prox_cod_cond` int(4) DEFAULT NULL,
  -- `not_used_num_ccp_2` varchar(20) DEFAULT NULL,
  -- `not_used_intestaz_ccp_2` varchar(120) DEFAULT NULL,
  -- `not_used_autoriz_pptt_2` varchar(50) DEFAULT NULL,
  -- `not_used_iban_posta_2` varchar(27) DEFAULT NULL,
  -- `not_used_pt_cin_2` varchar(1) DEFAULT NULL,
  -- `not_used_pt_sia_2` varchar(5) DEFAULT NULL,
  -- `not_used_indir_autorizzazione_2` varchar(50) DEFAULT NULL,
  -- `not_used_inc_glo_dt_inc_acc` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

ALTER TABLE `stabili` ADD PRIMARY KEY (`id`),  ADD UNIQUE KEY `uuid` (`uuid`);
;
ALTER TABLE `stabili` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

";

$dd->query($sql);
echo "<br/>".$sql."<br/>";
}

?>
