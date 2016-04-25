<?php
namespace SingoloAnno;

function temp_cassaCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/temp_cassa; \r\n";

    $dbstring = 'drop table `temp_cassa`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `temp_cassa` (
         `c_tab` varchar(6) DEFAULT NULL,
         `natura` varchar(1) DEFAULT NULL,
         `n_rif` int(2) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `data_cassa` datetime DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `importo` int(4) DEFAULT NULL,
         `entrate` int(4) DEFAULT NULL,
         `uscite` int(4) DEFAULT NULL,
         `saldo` int(4) DEFAULT NULL,
         `cod_cassa` varchar(3) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `anno` varchar(9) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function temp_cassaCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/temp_cassa; \r\n";

    $sql = 'SELECT ';
    $sql .= 'c_tab, ';
    $sql .= 'natura, ';
    $sql .= 'n_rif, ';
    $sql .= 'n_mese, ';
    $sql .= 'data_cassa, ';
    $sql .= 'descrizione, ';
    $sql .= 'importo, ';
    $sql .= 'entrate, ';
    $sql .= 'uscite, ';
    $sql .= 'saldo, ';
    $sql .= 'cod_cassa, ';
    $sql .= 'n_stra, ';
    $sql .= 'anno ';
    $sql .= 'FROM temp_cassa ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('temp_cassa', $row);
    }
}
