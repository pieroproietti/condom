<?php

function stabiliImporta($ds, $dd){
  $table="stabili";

  $columns=[
    "id_stabile               (id)",
    "cod_stabile              (codice)",
    "denominazione            (denominazione)",
    "indirizzo                (indirizzo)",
    "cap                      (cap)",
    "citta                    (comune)",
    "pr                       (provincia)",
    "codice_fisc              (codice_fiscale)",
    "pos_inps                 (posizione_inps)",
    "n_contribuente           (numero_contribuente)",
    "cf_amministratore        (codice_fiscale_amministratore)",
    "num_condomini            (numero_condomini)",
    "num_scale                (numero_scale)",
    //"note1                    (not_used_annotazioni)",
    "nome_directory           (cartella)",
    "ord_rata_1               (is_rata_ordinaria_1)",
    "ord_rata_2               (is_rata_ordinaria_2)",
    "ord_rata_3               (is_rata_ordinaria_3)",
    "ord_rata_4               (is_rata_ordinaria_4)",
    "ord_rata_5               (is_rata_ordinaria_5)",
    "ord_rata_6               (is_rata_ordinaria_6)",
    "ord_rata_7               (is_rata_ordinaria_7)",
    "ord_rata_8               (is_rata_ordinaria_8)",
    "ord_rata_9               (is_rata_ordinaria_9)",
    "ord_rata_10              (is_rata_ordinaria_10)",
    "ord_rata_11              (is_rata_ordinaria_11)",
    "ord_rata_12              (is_rata_ordinaria_12)",
    "ris_rata_1               (is_rata_ris_1)",
    "ris_rata_1               (is_rata_ris_1)",
    "ris_rata_2               (is_rata_ris_2)",
    "ris_rata_3               (is_rata_ris_3)",
    "ris_rata_4               (is_rata_ris_4)",
    "ris_rata_5               (is_rata_ris_5)",
    "ris_rata_6               (is_rata_ris_6)",
    "ris_rata_7               (is_rata_ris_7)",
    "ris_rata_8               (is_rata_ris_8)",
    "ris_rata_9               (is_rata_ris_9)",
    "ris_rata_10              (is_rata_ris_10)",
    "ris_rata_11              (is_rata_ris_11)",
    "ris_rata_12              (is_rata_ris_12)",
    "intestazione             (intestazione)",
    "data_intestaz            (is_intestazione)",
    "num_ccp                  (ccp_numero)",
    "intestaz_ccp             (ccp_intestazione)",
    "autoriz_pptt             (ccp_autorizzazione)",
    "banca                    (banca)",
    "banca_num_cc             (banca_numero_cc)",
    "banca_intest_cc          (banca_intestazione_cc)",
    "abi                      (banca_abi)",
    "cab                      (banca_cab)",
    //"sia                      (not_used_sia)",
    "note                     (annotazioni)",
    //"semaforo_cod             (not_used_semaforo_cod)",
    //"semaforo_nome            (not_used_semaforo_nome)",
    //"cin                      (not_used_cin)",

    "banca_prop_f24           (f24_banca)",
    "agenzia_prop_f24         (f24_agenzia)",
    //"inps_sede_f24            (not_used_inps_sede_f24)",
    //"inps_matricola_f24       (not_used_inps_matricola_f24)",
    //"inail_sede_f24           (not_used_inail_sede_f24)",
    //"inail_posiz_f24          (not_used_inail_posiz_f24)",
    //"inail_posiz2_f24         (not_used_inail_posiz2_f24)",
    "intestaz_f24             (f24_intestazione)",
    "prov_prop_f24            (f24_provincia)",
    //"da_cancellare            (not_used_da_cancellare)",
    //"dt_nascita_f24           (not_used_dt_nascita_f24)",
    //"sesso_f24                (not_used_sesso_f24)",
    //"comune_nasc_f24          (not_used_comune_nasc_f24)",
    //"prov_f24                 (not_used_prov_f24)",
    "f24_cc_addebitato        (f24_banca_cc)",
    "f24_abi                  (f24_banca_abi)",
    "f24_cab                  (f24_banca_cab)",
    "iban_banca               (banca_iban)",
    "iban_posta               (ccp_iban)",
    //"selezionato              (not_used_selezionato)",
    //"selez_stampa             (not_used_selez_stampa)",
    //"internet_si_no           (not_used_internet_si_no)",
    //"internet_cod_stab        (not_used_internet_cod_stab)",
    //"internet_cod_amm         (not_used_internet_cod_amm)",
    //"internet_cartella        (not_used_internet_cartella)",
    //"internet_cod_attivazione (not_used_internet_cod_attivazione)",
    //"internet_num_condomini   (not_used_internet_num_condomini)",
    //"internet_prezzo          (not_used_internet_num_condomini)",
    "e_mail_amm_x_770         (amministratore_770_email)",
    "amm_770_cognome          (amministratore_770_cognome)",
    "amm_770_nome             (amministratore_770_nome)",
    "amm_770_sesso            (amministratore_770_sesso) ",
    "amm_770_dt_nascita       (amministratore_770_nato_il)",
    "amm_770_comune_nascita   (amministratore_770_nato_a)",
    "cod_comune               (amministratore_770_nato_a_codice)",
    "amm_770_pr_nascita       (amministratore_770_nato_provincia)",
    "amm_770_indir_resid      (amministratore_770_residenza_indirizzo)",
    "amm_770_comune_resid     (amministratore_770_residenza_comune)",
    "amm_770_pr_resid         (amministratore_770_residenza_provincia)",
    "amm_770_cap_resid        (amministratore_770_residenza_cap)",
    "amm_770_tel_cell         (amministratore_770_cellulare)",
    //"privacy_si_no            (not_used_privacy_si_no)",
    //"privacy_cod_attivazione  (not_used_privacy_cod_attivazione)",
    //"data_invio_770_ags       (not_used_data_invio_770_ags)",
    //"banca_fax                (not_used_banca_fax)",
    //"banca_mail               (not_used_banca_mail)",
    //"banca_ca                 (not_used_banca_ca)",
    "indir_autorizzazione     (indirizzo_autorizzazione)",
    "f24_iban                 (f24_iban)",
    "ac_tu                    (catasto_terreni_urbano)",
    "ac_ip                    (catasto_ip)",
    "ac_urb_cat               (catasto_codice)",
    "ac_foglio                (catasto_foglio)",
    "ac_partic1               (catasto_particella)",
    //"ac_partic2               (not_used_ac_partic2)",
    "ac_sub                   (catasto_sub)",
    //"ac_data_acc              (not_used_ac_data_acc)",
    //"ac_num_acc               (not_used_ac_num_acc)",
    //"ac_prov_acc              (not_used_ac_prov_acc)",
    //"dt_scadenza_privacy      (not_used_dt_scadenza_privacy)",
    //"dt_scadenza_gesconweb    (not_used_dt_scadenza_gesconweb)",
    //"pt_cin                   (not_used_pt_cin)",
    //"pt_sia                   (not_used_pt_sia)",
    "f24_sia                  (f24_sia)",
    //"new_id                   (not_used_new_id)",
    "catasto_comune           (catasto_comune)",
    "catasto_pr               (catasto_provincia)",
    "agg_scad_f24             (f24_scadenza_del)",
    //"data_invio_cu_ags        (not_used_data_invio_cu_ags)",
    //"num_for_cu               (not_used_num_for_cu)",
    //"importo_cu               (not_used_importo_cu)",
    //"num_for_770              (not_used_num_for_770)",
    //"importo_770              (not_used_importo_770)",
    //"prox_cod_cond            (not_used_prox_cod_cond)",
    //"num_ccp_2                (not_used_num_ccp_2)",
    //"intestaz_ccp_2           (not_used_intestaz_ccp_2)",
    //"autoriz_pptt_2           (not_used_autoriz_pptt_2)",
    //"iban_posta_2             (not_used_iban_posta_2)",
    //"pt_cin_2                 (not_used_pt_cin_2)",
    //"pt_sia_2                 (not_used_pt_sia_2)",
    //"indir_autorizzazione_2   (not_used_indir_autorizzazione_2)",
    //"inc_glo_dt_inc_acc       (not_used_inc_glo_dt_inc_acc)"
  ];

  $stabili = $ds->select($table, $columns);

  require "uuid.php";
  if (!empty($stabili)) {
      foreach ($stabili as &$stabile) {
        $uuid= UUID::v4();
        $stabile['uuid'] = $uuid;
        $dd->insert("stabili", $stabile);
      }
  }else{
    echo "\$stabili=empty";
  }

}
?>