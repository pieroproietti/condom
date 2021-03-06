<?php
namespace SingoloAnno;

function consiglieriCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/consiglieri; \r\n";

    $dbstring = 'drop table `consiglieri`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `consiglieri` (
         `scala` varchar(3) DEFAULT NULL,
         `interno` varchar(4) DEFAULT NULL,
         `nome_consigliere` varchar(35) DEFAULT NULL,
         `indirizzo` varchar(35) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(30) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `tel_1` varchar(15) DEFAULT NULL,
         `tel_2` varchar(15) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function consiglieriCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/consiglieri; \r\n";
    $sql = 'SELECT ';
    $sql .= 'scala, ';
    $sql .= 'interno, ';
    $sql .= 'nome_consigliere, ';
    $sql .= 'indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'tel_1, ';
    $sql .= 'tel_2 ';
    $sql .= 'FROM consiglieri ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('consiglieri', $row);
    }
}
