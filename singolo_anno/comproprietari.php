<?php
namespace SingoloAnno;

function comproprietariCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/comproprietari; \r\n";

    $dbstring = 'drop table `comproprietari`;';
    echo "Creazione comproprietari; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `comproprietari` (
         `id_compr` int(4) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `diritto_reale` varchar(1) DEFAULT NULL,
         `descriz` varchar(25) DEFAULT NULL,
         `titolo_cond` varchar(35) DEFAULT NULL,
         `nom_cond` varchar(40) DEFAULT NULL,
         `presso` varchar(40) DEFAULT NULL,
         `ind` varchar(40) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(40) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `cond_dt_nasc` datetime DEFAULT NULL,
         `cond_luogo_nasc` varchar(50) DEFAULT NULL,
         `cond_pr_nasc` varchar(2) DEFAULT NULL,
         `tel1` varchar(25) DEFAULT NULL,
         `tel2` varchar(25) DEFAULT NULL,
         `cell_cond` varchar(20) DEFAULT NULL,
         `fax_cond` varchar(20) DEFAULT NULL,
         `e_mail_condomino` varchar(150) DEFAULT NULL,
         `cond_cod_fisc` varchar(16) DEFAULT NULL,
         `selez_ab_ass_stp` varchar(2) DEFAULT NULL,
         `selez_ab_ass_mail` varchar(2) DEFAULT NULL,
         `selez_ab_ass_fax` varchar(2) DEFAULT NULL,
         `selez_ab_ass_sped` varchar(2) DEFAULT NULL,
         `selez_attuale` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function comproprietariCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/comproprietari; \r\n";
    $sql = 'SELECT ';
    $sql .= 'id_compr, ';
    $sql .= 'id_cond, ';
    $sql .= 'diritto_reale, ';
    $sql .= 'descriz, ';
    $sql .= 'titolo_cond, ';
    $sql .= 'nom_cond, ';
    $sql .= 'presso, ';
    $sql .= 'ind, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'cond_dt_nasc, ';
    $sql .= 'cond_luogo_nasc, ';
    $sql .= 'cond_pr_nasc, ';
    $sql .= 'tel1, ';
    $sql .= 'tel2, ';
    $sql .= 'cell_cond, ';
    $sql .= 'fax_cond, ';
    $sql .= 'e_mail_condomino, ';
    $sql .= 'cond_cod_fisc, ';
    $sql .= 'selez_ab_ass_stp, ';
    $sql .= 'selez_ab_ass_mail, ';
    $sql .= 'selez_ab_ass_fax, ';
    $sql .= 'selez_ab_ass_sped, ';
    $sql .= 'selez_attuale ';
    $sql .= 'FROM comproprietari ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('comproprietari', $row);
    }
}
