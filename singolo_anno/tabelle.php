<?php
namespace SingoloAnno;

function tabelleCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/tabelle; \r\n";

    $dbstring = 'drop table `tabelle`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `tabelle` (
         `id_tabella` int(4) DEFAULT NULL,
         `cod_tab` varchar(6) DEFAULT NULL,
         `descr` varchar(70) DEFAULT NULL,
         `calcolo` varchar(1) DEFAULT NULL,
         `tipo` varchar(1) DEFAULT NULL,
         `tot_mm` decimal(10,2) DEFAULT NULL,
         `inte_col` varchar(19) DEFAULT NULL,
         `un_mis` varchar(8) DEFAULT NULL,
         `note` varchar(240) DEFAULT NULL,
         `nord` int(2) DEFAULT NULL,
         `tot_prev` decimal(10,2) DEFAULT NULL,
         `tot_prev_euro` varchar(50) DEFAULT NULL,
         `tot_cons` decimal(10,2) DEFAULT NULL,
         `tot_cons_euro` varchar(50) DEFAULT NULL,
         `tot_cond` decimal(10,2) DEFAULT NULL,
         `tot_inq` decimal(10,2) DEFAULT NULL,
         `len_mm_prev` int(4) DEFAULT NULL,
         `len_imp_prev` int(4) DEFAULT NULL,
         `len_mm_cons` int(4) DEFAULT NULL,
         `len_imp_cons` int(4) DEFAULT NULL,
         `nord2` int(2) DEFAULT NULL,
         `num_decimali` int(2) DEFAULT NULL,
         `selezionato` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function tabelleCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/tabelle; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_tabella, ';
    $sql .= 'cod_tab, ';
    $sql .= 'descr, ';
    $sql .= 'calcolo, ';
    $sql .= 'tipo, ';
    $sql .= 'tot_mm, ';
    $sql .= 'inte_col, ';
    $sql .= 'un_mis, ';
    $sql .= 'note, ';
    $sql .= 'nord, ';
    $sql .= 'tot_prev, ';
    $sql .= 'tot_prev_euro, ';
    $sql .= 'tot_cons, ';
    $sql .= 'tot_cons_euro, ';
    $sql .= 'tot_cond, ';
    $sql .= 'tot_inq, ';
    $sql .= 'len_mm_prev, ';
    $sql .= 'len_imp_prev, ';
    $sql .= 'len_mm_cons, ';
    $sql .= 'len_imp_cons, ';
    $sql .= 'nord2, ';
    $sql .= 'num_decimali, ';
    $sql .= 'selezionato ';
    $sql .= 'FROM tabelle ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('tabelle', $row);
    }
}
