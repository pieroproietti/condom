<?php
namespace SingoloAnno;

function preced_dovutoCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/preced_dovuto; \r\n";

    $dbstring = 'drop table `preced_dovuto`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `preced_dovuto` (
         `n_emissione` int(2) DEFAULT NULL,
         `n_ricevuta` int(2) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `cond_inq` varchar(1) DEFAULT NULL,
         `pos_riga` int(2) DEFAULT NULL,
         `rata_mese` varchar(2) DEFAULT NULL,
         `importo_l` int(4) DEFAULT NULL,
         `importo_e` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function preced_dovutoCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/preced_dovuto; \r\n";

    $sql = 'SELECT ';
    $sql .= 'n_emissione, ';
    $sql .= 'n_ricevuta, ';
    $sql .= 'id_condomino, ';
    $sql .= 'cond_inq, ';
    $sql .= 'pos_riga, ';
    $sql .= 'rata_mese, ';
    $sql .= 'importo_l, ';
    $sql .= 'importo_e ';
    $sql .= 'FROM preced_dovuto ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('preced_dovuto', $row);
    }
}
