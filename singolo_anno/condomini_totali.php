<?php

function condomini_totaliCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/condomini_totali; \r\n";

    $dbstring = 'drop table `condomini_totali`;';
    echo "Creazione condomini_totali; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `condomini_totali` (
         `unico` int(4) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `cod_cond` int(2) DEFAULT NULL,
         `cond_inquil` varchar(1) DEFAULT NULL,
         `scala` varchar(10) DEFAULT NULL,
         `int` varchar(10) DEFAULT NULL,
         `nom_cond` varchar(40) DEFAULT NULL,
         `cumulo` int(2) DEFAULT NULL,
         `importo` int(4) DEFAULT NULL,
         `cumulo_ec` int(2) DEFAULT NULL,
         `cumulo_orig` int(2) DEFAULT NULL,
         `ricevute` varchar(2) DEFAULT NULL,
         `ccp` varchar(2) DEFAULT NULL,
         `mav` varchar(2) DEFAULT NULL,
         `bonifici` varchar(2) DEFAULT NULL,
         `cumulo_ripartizione` int(2) DEFAULT NULL,
         `subentrato_dal` datetime DEFAULT NULL,
         `attivo_fino_al` datetime DEFAULT NULL,
         `internet_cod` varchar(5) DEFAULT NULL,
         `internet_pw` varchar(20) DEFAULT NULL,
         `selez_mail_ass` varchar(2) DEFAULT NULL,
         `selez_mail_avvisi` varchar(2) DEFAULT NULL,
         `selez_spediz_ass` varchar(2) DEFAULT NULL,
         `selez_spedizl_avvisi` varchar(2) DEFAULT NULL,
         `etichette` varchar(2) DEFAULT NULL,
         `in_elenco` varchar(2) DEFAULT NULL,
         `conv_assemblea` varchar(2) DEFAULT NULL,
         `e_lostesso_di` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function condomini_totaliCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/condomini_totali; \r\n";
    $sql = 'SELECT ';
    $sql .= 'unico, ';
    $sql .= 'id_cond, ';
    $sql .= 'cod_cond, ';
    $sql .= 'cond_inquil, ';
    $sql .= 'scala, ';
    $sql .= 'int, ';
    $sql .= 'nom_cond, ';
    $sql .= 'cumulo, ';
    $sql .= 'importo, ';
    $sql .= 'cumulo_ec, ';
    $sql .= 'cumulo_orig, ';
    $sql .= 'ricevute, ';
    $sql .= 'ccp, ';
    $sql .= 'mav, ';
    $sql .= 'bonifici, ';
    $sql .= 'cumulo_ripartizione, ';
    $sql .= 'subentrato_dal, ';
    $sql .= 'attivo_fino_al, ';
    $sql .= 'internet_cod, ';
    $sql .= 'internet_pw, ';
    $sql .= 'selez_mail_ass, ';
    $sql .= 'selez_mail_avvisi, ';
    $sql .= 'selez_spediz_ass, ';
    $sql .= 'selez_spedizl_avvisi, ';
    $sql .= 'etichette, ';
    $sql .= 'in_elenco, ';
    $sql .= 'conv_assemblea, ';
    $sql .= 'e_lostesso_di ';
    $sql .= 'FROM condomini_totali ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('condomini_totali', $row);
    }
}
