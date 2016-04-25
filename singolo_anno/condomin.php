<?php
namespace SingoloAnno;

function condominCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/condomin; \r\n";

    $dbstring = 'drop table `condomin`;';
    echo "Creazione condomin; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `condomin` (
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
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function condominCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/condomin; \r\n";
    $sql = 'SELECT ';
    $sql .= 'id_cond, ';
    $sql .= 'cod_cond, ';
    $sql .= 'scala, ';
    $sql .= 'int, ';
    $sql .= 'tipo_pr, ';
    $sql .= 'nom_cond, ';
    $sql .= 'presso, ';
    $sql .= 'ind, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'inquil, ';
    $sql .= 'tel1, ';
    $sql .= 'tel2, ';
    $sql .= 'note_cond, ';
    $sql .= 'inquil_nome, ';
    $sql .= 'inquil_presso, ';
    $sql .= 'inquil_indir, ';
    $sql .= 'inquil_cap, ';
    $sql .= 'inquil_citta, ';
    $sql .= 'inquil_pr, ';
    $sql .= 'inquil_tel1, ';
    $sql .= 'inquil_tel2, ';
    $sql .= 'inquil_note, ';
    $sql .= 'temp_num, ';
    $sql .= 'note, ';
    $sql .= 'cumulo_cond, ';
    $sql .= 'cumulo_inq, ';
    $sql .= 'ricevute, ';
    $sql .= 'ccp, ';
    $sql .= 'ricevute_cond, ';
    $sql .= 'ricevute_inq, ';
    $sql .= 'ccp_cond, ';
    $sql .= 'ccp_inq, ';
    $sql .= 'etichette, ';
    $sql .= 'assemblee, ';
    $sql .= 'in_elenco, ';
    $sql .= 'cumulo_cond_ec, ';
    $sql .= 'cumulo_inq_ec, ';
    $sql .= 'cumulo_cond_orig, ';
    $sql .= 'cumulo_inq_orig, ';
    $sql .= 'cumulo_elenchi, ';
    $sql .= 'cumulo_ass, ';
    $sql .= 'stampa_attuale, ';
    $sql .= 'cumulo_raccomand, ';
    $sql .= 'cumulo_old, ';
    $sql .= 'titolo_cond, ';
    $sql .= 'titolo_inq, ';
    $sql .= 'cc_banca_cond, ';
    $sql .= 'cc_banca_inq, ';
    $sql .= 'banca_cond, ';
    $sql .= 'banca_inq, ';
    $sql .= 'mav_cond, ';
    $sql .= 'mav_inq, ';
    $sql .= 'bonifico_cond, ';
    $sql .= 'bonifico_inq, ';
    $sql .= 'etichette_inquilini, ';
    $sql .= 'e_mail_condomino, ';
    $sql .= 'e_mail_inquilino, ';
    $sql .= 'dist_cond_inq, ';
    $sql .= 'dist_cond_inq_risc, ';
    $sql .= 'dist_cond_inq_straord, ';
    $sql .= 'note_inquilino, ';
    $sql .= 'cumulo_ripartiz_cond, ';
    $sql .= 'cumulo_ripartiz_inq, ';
    $sql .= 'subentro_prima_cera, ';
    $sql .= 'subentro_adesso_ce, ';
    $sql .= 'subentrato_dal, ';
    $sql .= 'attivo_fino_al, ';
    $sql .= 'internet_cod_cond, ';
    $sql .= 'internet_pw_cond, ';
    $sql .= 'internet_cod_inq, ';
    $sql .= 'internet_pw_inq, ';
    $sql .= 'fax_cond, ';
    $sql .= 'fax_inq, ';
    $sql .= 'cell_cond, ';
    $sql .= 'cell_inq, ';
    $sql .= 'selez_mail_ass_cond, ';
    $sql .= 'selez_mail_ass_inq, ';
    $sql .= 'selez_mail_avvisi_cond, ';
    $sql .= 'selez_mail_avvisi_inq, ';
    $sql .= 'selez_spediz_ass_cond, ';
    $sql .= 'selez_spediz_ass_inq, ';
    $sql .= 'selez_spedizl_avvisi_cond, ';
    $sql .= 'selez_spedizl_avvisi_inq, ';
    $sql .= 'in_elenchi_inquilini, ';
    $sql .= 'ricorda_che_cond, ';
    $sql .= 'ricorda_che_inq, ';
    $sql .= 'inquil_dal, ';
    $sql .= 'inquil_al, ';
    $sql .= 'cond_cod_fisc, ';
    $sql .= 'cond_dt_nasc, ';
    $sql .= 'cond_luogo_nasc, ';
    $sql .= 'cond_pr_nasc, ';
    $sql .= 'catasto_sez_urbana, ';
    $sql .= 'catasto_foglio, ';
    $sql .= 'catasto_particella, ';
    $sql .= 'catasto_sub, ';
    $sql .= 'catasto_zona, ';
    $sql .= 'catasto_categoria, ';
    $sql .= 'catasto_classe, ';
    $sql .= 'catasto_consistenza, ';
    $sql .= 'catasto_superfice, ';
    $sql .= 'catasto_rendita, ';
    $sql .= 'pertinenze_box, ';
    $sql .= 'pertinenze_cant, ';
    $sql .= 'pertinenze_pauto, ';
    $sql .= 'pertinenze_altro, ';
    $sql .= 'diritto_reale, ';
    $sql .= 'diritto_godimento, ';
    $sql .= 'sicur1_ui_a_norma, ';
    $sql .= 'sicur2_imp_a_norma, ';
    $sql .= 'sicur3_imp_revisionati, ';
    $sql .= 'sicur4_opere_murarie, ';
    $sql .= 'sicur5_opere_impegno, ';
    $sql .= 'inquil_cod_fisc, ';
    $sql .= 'inquil_contratto_dal, ';
    $sql .= 'note_registro_anagrafe, ';
    $sql .= 'e_lostesso_di ';
    $sql .= 'FROM condomin ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('condomin', $row);
    }
}
