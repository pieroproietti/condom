<?php

function protoc_ecCreate($ds, $dd)
{
    $dbstring = 'drop table `protoc_ec`;';
    echo "Creazione protoc_ec; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `protoc_ec` (
         `id_corrisp` int(4) DEFAULT NULL,
         `protocollo` int(4) DEFAULT NULL,
         `tipo_documento` varchar(100) DEFAULT NULL,
         `data` datetime DEFAULT NULL,
         `forn_cond_altro` varchar(50) DEFAULT NULL,
         `codice` int(4) DEFAULT NULL,
         `destinatario` varchar(100) DEFAULT NULL,
         `oggetto` varchar(150) DEFAULT NULL,
         `lettera_tipo_caricata` varchar(100) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `scala` varchar(10) DEFAULT NULL,
         `interno` varchar(10) DEFAULT NULL,
         `c_i` varchar(1) DEFAULT NULL,
         `nome` varchar(50) DEFAULT NULL,
         `totale` decimal(10,2) DEFAULT NULL,
         `nome_pdf` varchar(50) DEFAULT NULL,
         `alleg_4` varchar(150) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function protoc_ecCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_corrisp, ';
    $sql .= 'protocollo, ';
    $sql .= 'tipo_documento, ';
    $sql .= 'data, ';
    $sql .= 'forn_cond_altro, ';
    $sql .= 'codice, ';
    $sql .= 'destinatario, ';
    $sql .= 'oggetto, ';
    $sql .= 'lettera_tipo_caricata, ';
    $sql .= 'note, ';
    $sql .= 'scala, ';
    $sql .= 'interno, ';
    $sql .= 'c_i, ';
    $sql .= 'nome, ';
    $sql .= 'totale, ';
    $sql .= 'nome_pdf, ';
    $sql .= 'alleg_4 ';
    $sql .= 'FROM protoc_ec ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('protoc_ec', $row);
    }
}
