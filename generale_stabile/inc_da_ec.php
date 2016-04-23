<?php

function inc_da_ecCreate($ds, $dd)
{
    $dbstring = 'drop table `inc_da_ec`;';
    echo "Creazione inc_da_ec; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `inc_da_ec` (
         `protocollo` int(4) DEFAULT NULL,
         `data_pag` datetime DEFAULT NULL,
         `num_incasso` int(2) DEFAULT NULL,
         `anno_incasso` varchar(10) DEFAULT NULL,
         `id_condomino` varchar(50) DEFAULT NULL,
         `sc_int` varchar(24) DEFAULT NULL,
         `nome_condomino` varchar(50) DEFAULT NULL,
         `descrizione_aggiuntiva` varchar(150) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `nome_file_pdf` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function inc_da_ecCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'protocollo, ';
    $sql .= 'data_pag, ';
    $sql .= 'num_incasso, ';
    $sql .= 'anno_incasso, ';
    $sql .= 'id_condomino, ';
    $sql .= 'sc_int, ';
    $sql .= 'nome_condomino, ';
    $sql .= 'descrizione_aggiuntiva, ';
    $sql .= 'importo, ';
    $sql .= 'nome_file_pdf ';
    $sql .= 'FROM inc_da_ec ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('inc_da_ec', $row);
    }
}
