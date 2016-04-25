<?php
namespace SingoloAnno;

function rendite_condominialiCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/rendite_condominiali; \r\n";

    $dbstring = 'drop table `rendite_condominiali`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `rendite_condominiali` (
         `cod` int(4) DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `indirizzo` varchar(50) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(50) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `particella` varchar(50) DEFAULT NULL,
         `rendita_catastale` decimal(10,2) DEFAULT NULL,
         `rendita_effettiva` decimal(10,2) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `anno_fiscale` int(4) DEFAULT NULL,
         `cod_catastale_comune` varchar(5) DEFAULT NULL,
         `importo_ici_eserc_prec` decimal(10,2) DEFAULT NULL,
         `rendita_catastale_orig` decimal(10,2) DEFAULT NULL,
         `assogett_imu` varchar(2) DEFAULT NULL,
         `assogett_tasi` varchar(2) DEFAULT NULL,
         `categoria` varchar(1) DEFAULT NULL,
         `coefficiente` int(2) DEFAULT NULL,
         `aliquota_imu` decimal(10,2) DEFAULT NULL,
         `aliquota_tasi` decimal(10,2) DEFAULT NULL,
         `detraz_tasi` decimal(10,2) DEFAULT NULL,
         `rli_ufficio_terr` varchar(50) DEFAULT NULL,
         `rli_tipo_contratto` varchar(2) DEFAULT NULL,
         `rli_num_pag` int(2) DEFAULT NULL,
         `rli_num_copie` int(2) DEFAULT NULL,
         `rli_imp_canone` decimal(10,2) DEFAULT NULL,
         `rli_dal` datetime DEFAULT NULL,
         `rli_al` datetime DEFAULT NULL,
         `rli_stipula` datetime DEFAULT NULL,
         `rli_annualita` varchar(4) DEFAULT NULL,
         `rli_cod_ufficio` varchar(3) DEFAULT NULL,
         `rli_anno` varchar(4) DEFAULT NULL,
         `rli_serie` varchar(2) DEFAULT NULL,
         `rli_numero` varchar(6) DEFAULT NULL,
         `rli_sottonum` varchar(3) DEFAULT NULL,
         `rli_cod_id_contratto` varchar(18) DEFAULT NULL,
         `rli_cf_conduttore` varchar(16) DEFAULT NULL,
         `rli_cognome_cond` varchar(50) DEFAULT NULL,
         `rli_nome_cond` varchar(50) DEFAULT NULL,
         `rli_dt_nas_cond` datetime DEFAULT NULL,
         `rli_sesso_cond` varchar(1) DEFAULT NULL,
         `rli_comune_nas_cond` varchar(100) DEFAULT NULL,
         `rli_pr_nas_cond` varchar(2) DEFAULT NULL,
         `rli_tu` varchar(1) DEFAULT NULL,
         `rli_ip` varchar(1) DEFAULT NULL,
         `rli_sez` varchar(3) DEFAULT NULL,
         `rli_foglio` varchar(4) DEFAULT NULL,
         `rli_partic` varchar(5) DEFAULT NULL,
         `rli_partic2` varchar(5) DEFAULT NULL,
         `rli_sub` varchar(4) DEFAULT NULL,
         `rli_in_accatast` varchar(1) DEFAULT NULL,
         `rli_categ_catast` varchar(3) DEFAULT NULL,
         `eli1_des1` varchar(17) DEFAULT NULL,
         `eli1_cod1` varchar(4) DEFAULT NULL,
         `eli1_anno1` varchar(4) DEFAULT NULL,
         `eli1_importo1` decimal(10,2) DEFAULT NULL,
         `eli1_des2` varchar(17) DEFAULT NULL,
         `eli1_cod2` varchar(4) DEFAULT NULL,
         `eli1_anno2` varchar(4) DEFAULT NULL,
         `eli1_importo2` decimal(10,2) DEFAULT NULL,
         `eli1_des3` varchar(17) DEFAULT NULL,
         `eli1_cod3` varchar(4) DEFAULT NULL,
         `eli1_anno3` varchar(4) DEFAULT NULL,
         `eli1_importo3` decimal(10,2) DEFAULT NULL,
         `eli1_dt_pagam` datetime DEFAULT NULL,
         `eli2_des1` varchar(17) DEFAULT NULL,
         `eli2_cod1` varchar(4) DEFAULT NULL,
         `eli2_anno1` varchar(4) DEFAULT NULL,
         `eli2_importo1` decimal(10,2) DEFAULT NULL,
         `eli2_des2` varchar(17) DEFAULT NULL,
         `eli2_cod2` varchar(4) DEFAULT NULL,
         `eli2_anno2` varchar(4) DEFAULT NULL,
         `eli2_importo2` decimal(10,2) DEFAULT NULL,
         `eli2_des3` varchar(17) DEFAULT NULL,
         `eli2_cod3` varchar(4) DEFAULT NULL,
         `eli2_anno3` varchar(4) DEFAULT NULL,
         `eli2_importo3` decimal(10,2) DEFAULT NULL,
         `eli2_dt_pagam` datetime DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function rendite_condominialiCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/rendite_condominiali; \r\n";

    $sql = 'SELECT ';
    $sql .= 'cod, ';
    $sql .= 'descrizione, ';
    $sql .= 'indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'particella, ';
    $sql .= 'rendita_catastale, ';
    $sql .= 'rendita_effettiva, ';
    $sql .= 'tabella, ';
    $sql .= 'anno_fiscale, ';
    $sql .= 'cod_catastale_comune, ';
    $sql .= 'importo_ici_eserc_prec, ';
    $sql .= 'rendita_catastale_orig, ';
    $sql .= 'assogett_imu, ';
    $sql .= 'assogett_tasi, ';
    $sql .= 'categoria, ';
    $sql .= 'coefficiente, ';
    $sql .= 'aliquota_imu, ';
    $sql .= 'aliquota_tasi, ';
    $sql .= 'detraz_tasi, ';
    $sql .= 'rli_ufficio_terr, ';
    $sql .= 'rli_tipo_contratto, ';
    $sql .= 'rli_num_pag, ';
    $sql .= 'rli_num_copie, ';
    $sql .= 'rli_imp_canone, ';
    $sql .= 'rli_dal, ';
    $sql .= 'rli_al, ';
    $sql .= 'rli_stipula, ';
    $sql .= 'rli_annualita, ';
    $sql .= 'rli_cod_ufficio, ';
    $sql .= 'rli_anno, ';
    $sql .= 'rli_serie, ';
    $sql .= 'rli_numero, ';
    $sql .= 'rli_sottonum, ';
    $sql .= 'rli_cod_id_contratto, ';
    $sql .= 'rli_cf_conduttore, ';
    $sql .= 'rli_cognome_cond, ';
    $sql .= 'rli_nome_cond, ';
    $sql .= 'rli_dt_nas_cond, ';
    $sql .= 'rli_sesso_cond, ';
    $sql .= 'rli_comune_nas_cond, ';
    $sql .= 'rli_pr_nas_cond, ';
    $sql .= 'rli_tu, ';
    $sql .= 'rli_ip, ';
    $sql .= 'rli_sez, ';
    $sql .= 'rli_foglio, ';
    $sql .= 'rli_partic, ';
    $sql .= 'rli_partic2, ';
    $sql .= 'rli_sub, ';
    $sql .= 'rli_in_accatast, ';
    $sql .= 'rli_categ_catast, ';
    $sql .= 'eli1_des1, ';
    $sql .= 'eli1_cod1, ';
    $sql .= 'eli1_anno1, ';
    $sql .= 'eli1_importo1, ';
    $sql .= 'eli1_des2, ';
    $sql .= 'eli1_cod2, ';
    $sql .= 'eli1_anno2, ';
    $sql .= 'eli1_importo2, ';
    $sql .= 'eli1_des3, ';
    $sql .= 'eli1_cod3, ';
    $sql .= 'eli1_anno3, ';
    $sql .= 'eli1_importo3, ';
    $sql .= 'eli1_dt_pagam, ';
    $sql .= 'eli2_des1, ';
    $sql .= 'eli2_cod1, ';
    $sql .= 'eli2_anno1, ';
    $sql .= 'eli2_importo1, ';
    $sql .= 'eli2_des2, ';
    $sql .= 'eli2_cod2, ';
    $sql .= 'eli2_anno2, ';
    $sql .= 'eli2_importo2, ';
    $sql .= 'eli2_des3, ';
    $sql .= 'eli2_cod3, ';
    $sql .= 'eli2_anno3, ';
    $sql .= 'eli2_importo3, ';
    $sql .= 'eli2_dt_pagam ';
    $sql .= 'FROM rendite_condominiali ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('rendite_condominiali', $row);
    }
}
