<?php
namespace SingoloAnno;

function rateCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/rate; \r\n";

    $dbstring = 'drop table `rate`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `rate` (
         `id_rate` int(4) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `propr_inquil` varchar(1) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `o_r_s` varchar(1) DEFAULT NULL,
         `importo_dovuto` int(4) DEFAULT NULL,
         `importo_dovuto_euro` decimal(10,2) DEFAULT NULL,
         `d_p_e` varchar(1) DEFAULT NULL,
         `dt_empag` datetime DEFAULT NULL,
         `descrizione` varchar(35) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `str_mese` int(2) DEFAULT NULL,
         `str_anno` int(2) DEFAULT NULL,
         `dt1_da` datetime DEFAULT NULL,
         `dt2_a` datetime DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function rateCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/rate; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_rate, ';
    $sql .= 'id_condomino, ';
    $sql .= 'propr_inquil, ';
    $sql .= 'n_mese, ';
    $sql .= 'o_r_s, ';
    $sql .= 'importo_dovuto, ';
    $sql .= 'importo_dovuto_euro, ';
    $sql .= 'd_p_e, ';
    $sql .= 'dt_empag, ';
    $sql .= 'descrizione, ';
    $sql .= 'n_stra, ';
    $sql .= 'str_mese, ';
    $sql .= 'str_anno, ';
    $sql .= 'dt1_da, ';
    $sql .= 'dt2_a ';
    $sql .= 'FROM rate ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('rate', $row);
    }
}
