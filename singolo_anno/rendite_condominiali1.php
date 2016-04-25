<?php
namespace SingoloAnno;

function rendite_condominiali1Create($ds, $dd)
{
  echo "Creazione di singolo_anno/rendite_condominiali1; \r\n";

    $dbstring = 'drop table `rendite_condominiali1`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `rendite_condominiali1` (
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
         `anno_fiscale` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function rendite_condominiali1Copy($ds, $dd)
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
    $sql .= 'anno_fiscale ';
    $sql .= 'FROM rendite_condominiali1 ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('rendite_condominiali1', $row);
    }
}
