<?php
namespace SingoloAnno;

function giri_contiCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/giri_conti; \r\n";

    $dbstring = 'drop table `giri_conti`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `giri_conti` (
         `riferimento` int(2) DEFAULT NULL,
         `data_giroconto` datetime DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `importo` int(4) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL,
         `cod_uscita` varchar(3) DEFAULT NULL,
         `cod_entrata` varchar(3) DEFAULT NULL,
         `note` varchar(200) DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function giri_contiCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/giri_conti; \r\n";

    $sql = 'SELECT ';
    $sql .= 'riferimento, ';
    $sql .= 'data_giroconto, ';
    $sql .= 'descrizione, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro, ';
    $sql .= 'cod_uscita, ';
    $sql .= 'cod_entrata, ';
    $sql .= 'note, ';
    $sql .= 'tipo_riga ';
    $sql .= 'FROM giri_conti ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('giri_conti', $row);
    }
}
