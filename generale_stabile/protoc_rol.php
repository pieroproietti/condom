<?php

function protoc_rolCreate($ds, $dd)
{
    $dbstring = 'drop table `protoc_rol`;';
    echo "Creazione protoc_rol; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `protoc_rol` (
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
         `destinatario_riga1` varchar(100) DEFAULT NULL,
         `destinatario_riga2` varchar(100) DEFAULT NULL,
         `indir_destinatario` varchar(100) DEFAULT NULL,
         `civ_destinatario` varchar(100) DEFAULT NULL,
         `cap_destinartario` varchar(5) DEFAULT NULL,
         `citta_destinatario` varchar(100) DEFAULT NULL,
         `spediz_effettuata` smallint DEFAULT NULL,
         `nome_documento` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function protoc_rolCopy($ds, $dd)
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
    $sql .= 'destinatario_riga1, ';
    $sql .= 'destinatario_riga2, ';
    $sql .= 'indir_destinatario, ';
    $sql .= 'civ_destinatario, ';
    $sql .= 'cap_destinartario, ';
    $sql .= 'citta_destinatario, ';
    $sql .= 'spediz_effettuata, ';
    $sql .= 'nome_documento ';
    $sql .= 'FROM protoc_rol ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('protoc_rol', $row);
    }
}
