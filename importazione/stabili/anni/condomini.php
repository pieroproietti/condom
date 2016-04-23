<?php

function condominiCrea($dd)
{
  echo "Creazione condom/condomini\r\n";

    $sql = '
    DROP TABLE IF EXISTS `condomini`;
    CREATE TABLE `condomini` (
        `id` int(11) NOT NULL,
        `stabile_id` int(11) NOT NULL,
        `stabile_uuid` varchar(36) NOT NULL,
        `anno_id` varchar(4) NOT NULL,
        `id_cond` int(4) DEFAULT NULL,
        `cod_cond` int(2) DEFAULT NULL,
        `scala` varchar(10) DEFAULT NULL,
        `int` varchar(10) DEFAULT NULL,
        `tipo_pr` varchar(1) DEFAULT NULL,
        `nom_cond` varchar(40) DEFAULT NULL,
        `presso` varchar(40) DEFAULT NULL,
        `ind` varchar(40) DEFAULT NULL,
        `cap` varchar(5) DEFAULT NULL,
        `citta` varchar(40) DEFAULT NULL,
        `pr` varchar(2) DEFAULT NULL,
        `inquil` varchar(30) DEFAULT NULL,
        `tel1` varchar(25) DEFAULT NULL,
        `tel2` varchar(25) DEFAULT NULL,
        `note_cond` varchar(70) DEFAULT NULL,
        `inquil_nome` varchar(40) DEFAULT NULL,
        `inquil_presso` varchar(40) DEFAULT NULL,
        `inquil_indir` varchar(40) DEFAULT NULL,
        `inquil_cap` varchar(5) DEFAULT NULL,
        `inquil_citta` varchar(40) DEFAULT NULL,
        `inquil_pr` varchar(2) DEFAULT NULL,
        `inquil_tel1` varchar(25) DEFAULT NULL,
        `inquil_tel2` varchar(25) DEFAULT NULL,
        `inquil_note` varchar(70) DEFAULT NULL,
        `temp_num` int(4) DEFAULT NULL,
        `note` text DEFAULT NULL,
        `cumulo_cond` int(2) DEFAULT NULL,
        `cumulo_inq` int(2) DEFAULT NULL,
        `ricevute` varchar(2) DEFAULT NULL,
        `ccp` varchar(2) DEFAULT NULL,
        `ricevute_cond` varchar(2) DEFAULT NULL,
        `ricevute_inq` varchar(2) DEFAULT NULL,
        `ccp_cond` varchar(2) DEFAULT NULL,
        `ccp_inq` varchar(2) DEFAULT NULL,
        `etichette` varchar(2) DEFAULT NULL,
        `assemblee` varchar(2) DEFAULT NULL,
        `in_elenco` varchar(2) DEFAULT NULL,
        `cumulo_cond_ec` int(2) DEFAULT NULL,
        `cumulo_inq_ec` int(2) DEFAULT NULL,
        `cumulo_cond_orig` int(2) DEFAULT NULL,
        `cumulo_inq_orig` int(2) DEFAULT NULL,
        `cumulo_elenchi` int(2) DEFAULT NULL,
        `cumulo_ass` int(2) DEFAULT NULL,
        `stampa_attuale` varchar(2) DEFAULT NULL,
        `cumulo_raccomand` int(2) DEFAULT NULL,
        `cumulo_old` int(2) DEFAULT NULL,
        `titolo_cond` varchar(35) DEFAULT NULL,
        `titolo_inq` varchar(35) DEFAULT NULL,
        `cc_banca_cond` varchar(20) DEFAULT NULL,
        `cc_banca_inq` varchar(20) DEFAULT NULL,
        `banca_cond` varchar(200) DEFAULT NULL,
        `banca_inq` varchar(200) DEFAULT NULL,
        `mav_cond` varchar(2) DEFAULT NULL,
        `mav_inq` varchar(2) DEFAULT NULL,
        `bonifico_cond` varchar(2) DEFAULT NULL,
        `bonifico_inq` varchar(2) DEFAULT NULL,
        `etichette_inquilini` varchar(2) DEFAULT NULL,
        `e_mail_condomino` varchar(150) DEFAULT NULL,
        `e_mail_inquilino` varchar(150) DEFAULT NULL,
        `dist_cond_inq` varchar(2) DEFAULT NULL,
        `dist_cond_inq_risc` varchar(2) DEFAULT NULL,
        `dist_cond_inq_straord` varchar(2) DEFAULT NULL,
        `note_inquilino` text DEFAULT NULL,
        `cumulo_ripartiz_cond` int(2) DEFAULT NULL,
        `cumulo_ripartiz_inq` int(2) DEFAULT NULL,
        `subentro_prima_cera` int(4) DEFAULT NULL,
        `subentro_adesso_ce` int(4) DEFAULT NULL,
        `subentrato_dal` datetime DEFAULT NULL,
        `attivo_fino_al` datetime DEFAULT NULL,
        `internet_cod_cond` varchar(5) DEFAULT NULL,
        `internet_pw_cond` varchar(20) DEFAULT NULL,
        `internet_cod_inq` varchar(5) DEFAULT NULL,
        `internet_pw_inq` varchar(20) DEFAULT NULL,
        `fax_cond` varchar(20) DEFAULT NULL,
        `fax_inq` varchar(20) DEFAULT NULL,
        `cell_cond` varchar(20) DEFAULT NULL,
        `cell_inq` varchar(20) DEFAULT NULL,
        `selez_mail_ass_cond` varchar(2) DEFAULT NULL,
        `selez_mail_ass_inq` varchar(2) DEFAULT NULL,
        `selez_mail_avvisi_cond` varchar(2) DEFAULT NULL,
        `selez_mail_avvisi_inq` varchar(2) DEFAULT NULL,
        `selez_spediz_ass_cond` varchar(2) DEFAULT NULL,
        `selez_spediz_ass_inq` varchar(2) DEFAULT NULL,
        `selez_spedizl_avvisi_cond` varchar(2) DEFAULT NULL,
        `selez_spedizl_avvisi_inq` varchar(2) DEFAULT NULL,
        `in_elenchi_inquilini` varchar(2) DEFAULT NULL,
        `ricorda_che_cond` text DEFAULT NULL,
        `ricorda_che_inq` text DEFAULT NULL,
        `inquil_dal` datetime DEFAULT NULL,
        `inquil_al` datetime DEFAULT NULL,
        `cond_cod_fisc` varchar(16) DEFAULT NULL,
        `cond_dt_nasc` datetime DEFAULT NULL,
        `cond_luogo_nasc` varchar(50) DEFAULT NULL,
        `cond_pr_nasc` varchar(2) DEFAULT NULL,
        `catasto_sez_urbana` varchar(3) DEFAULT NULL,
        `catasto_foglio` varchar(4) DEFAULT NULL,
        `catasto_particella` varchar(5) DEFAULT NULL,
        `catasto_sub` varchar(6) DEFAULT NULL,
        `catasto_zona` varchar(2) DEFAULT NULL,
        `catasto_categoria` varchar(4) DEFAULT NULL,
        `catasto_classe` varchar(2) DEFAULT NULL,
        `catasto_consistenza` varchar(10) DEFAULT NULL,
        `catasto_superfice` varchar(10) DEFAULT NULL,
        `catasto_rendita` varchar(10) DEFAULT NULL,
        `pertinenze_box` varchar(5) DEFAULT NULL,
        `pertinenze_cant` varchar(5) DEFAULT NULL,
        `pertinenze_pauto` varchar(5) DEFAULT NULL,
        `pertinenze_altro` varchar(5) DEFAULT NULL,
        `diritto_reale` varchar(1) DEFAULT NULL,
        `diritto_godimento` varchar(1) DEFAULT NULL,
        `sicur1_ui_a_norma` varchar(2) DEFAULT NULL,
        `sicur2_imp_a_norma` varchar(2) DEFAULT NULL,
        `sicur3_imp_revisionati` varchar(2) DEFAULT NULL,
        `sicur4_opere_murarie` varchar(2) DEFAULT NULL,
        `sicur5_opere_impegno` varchar(2) DEFAULT NULL,
        `inquil_cod_fisc` varchar(16) DEFAULT NULL,
        `inquil_contratto_dal` datetime DEFAULT NULL,
        `note_registro_anagrafe` text DEFAULT NULL,
        `e_lostesso_di` int(2) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  ALTER TABLE `acqua_dettagli` ADD PRIMARY KEY (`id`);
  ALTER TABLE `acqua_dettagli` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
  ';
  $dd->query($sql);
}

function condominiImporta($ds, $dd,  $stabile_id, $stabile_uuid, $anno_id)
{
  echo "Imporazione di: singolo_anno/condomin in: condom/condomini\r\n";
  $table = 'condomin';
  $columns = [


  ];

  $condomini = $ds->select($table, $columns);
  if (!empty($condomini)) {
      foreach ($condomini as &$condominio) {
        $condominio['stabile_id'] = $stabile_id;
        $condominio['stabile_uuid'] = $stabile_uuid;
        $condominio['anno_id'] = $anno_id;
        $dd->insert('condomin', $condominio);
    }
  }
}
