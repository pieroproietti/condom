<?php

function votazioni_dettCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/votazioni_dett; \r\n";

    $dbstring = 'drop table `votazioni_dett`;';
    echo "Creazione votazioni_dett; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `votazioni_dett` (
         `id_votazione` int(4) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `millesimi` decimal(10,2) DEFAULT NULL,
         `p_d_a` varchar(10) DEFAULT NULL,
         `mill_si` decimal(10,2) DEFAULT NULL,
         `mill_astenuti` decimal(10,2) DEFAULT NULL,
         `mill_no` decimal(10,2) DEFAULT NULL,
         `mill_assenti` decimal(10,2) DEFAULT NULL,
         `nome_condomino` varchar(50) DEFAULT NULL,
         `cumulo_in_presenze` int(4) DEFAULT NULL,
         `id` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function votazioni_dettCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/votazioni_dett; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_votazione, ';
    $sql .= 'id_condomino, ';
    $sql .= 'millesimi, ';
    $sql .= 'p_d_a, ';
    $sql .= 'mill_si, ';
    $sql .= 'mill_astenuti, ';
    $sql .= 'mill_no, ';
    $sql .= 'mill_assenti, ';
    $sql .= 'nome_condomino, ';
    $sql .= 'cumulo_in_presenze, ';
    $sql .= 'id ';
    $sql .= 'FROM votazioni_dett ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('votazioni_dett', $row);
    }
}
