<?php
namespace SingoloAnno;

function rate_percentualiCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/rate_percentuali; \r\n";

    $dbstring = 'drop table `rate_percentuali`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `rate_percentuali` (
         `id` int(4) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `data_emissione` datetime DEFAULT NULL,
         `descrizione` varchar(40) DEFAULT NULL,
         `percentuale` decimal(10,2) DEFAULT NULL,
         `str_mese` int(2) DEFAULT NULL,
         `str_anno` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function rate_percentualiCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/rate_percentuali; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'n_stra, ';
    $sql .= 'n_mese, ';
    $sql .= 'data_emissione, ';
    $sql .= 'descrizione, ';
    $sql .= 'percentuale, ';
    $sql .= 'str_mese, ';
    $sql .= 'str_anno ';
    $sql .= 'FROM rate_percentuali ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('rate_percentuali', $row);
    }
}
