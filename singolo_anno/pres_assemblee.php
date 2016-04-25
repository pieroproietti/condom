<?php
namespace SingoloAnno;

function pres_assembleeCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/pres_assemblee; \r\n";

    $dbstring = 'drop table `pres_assemblee`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `pres_assemblee` (
         `num_assemblea` int(2) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `millesimi` decimal(10,2) DEFAULT NULL,
         `p_d_a` varchar(10) DEFAULT NULL,
         `mill_presenti` decimal(10,2) DEFAULT NULL,
         `mill_delegati` decimal(10,2) DEFAULT NULL,
         `mill_assenti` decimal(10,2) DEFAULT NULL,
         `delegato` varchar(50) DEFAULT NULL,
         `nome_condomino` varchar(50) DEFAULT NULL,
         `cumulo_in_presenze` int(4) DEFAULT NULL,
         `id` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function pres_assembleeCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/pres_assemblee; \r\n";
    $sql = 'SELECT ';
    $sql .= 'num_assemblea, ';
    $sql .= 'id_condomino, ';
    $sql .= 'millesimi, ';
    $sql .= 'p_d_a, ';
    $sql .= 'mill_presenti, ';
    $sql .= 'mill_delegati, ';
    $sql .= 'mill_assenti, ';
    $sql .= 'delegato, ';
    $sql .= 'nome_condomino, ';
    $sql .= 'cumulo_in_presenze, ';
    $sql .= 'id ';
    $sql .= 'FROM pres_assemblee ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('pres_assemblee', $row);
    }
}
