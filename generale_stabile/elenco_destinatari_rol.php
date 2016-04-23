<?php

function elenco_destinatari_rolCreate($ds, $dd)
{
    $dbstring = 'drop table `elenco_destinatari_rol`;';
    echo "Creazione generale_stabile\elenco_destinatari_rol; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `elenco_destinatari_rol` (
         `rif_lettera` int(4) DEFAULT NULL,
         `codice` int(4) DEFAULT NULL,
         `scala` varchar(20) DEFAULT NULL,
         `interno` varchar(20) DEFAULT NULL,
         `nome_destinatario` varchar(100) DEFAULT NULL,
         `destinatario_riga1` varchar(100) DEFAULT NULL,
         `destinatario_riga2` varchar(100) DEFAULT NULL,
         `indir_destinatario` varchar(100) DEFAULT NULL,
         `civ_destinatario` varchar(100) DEFAULT NULL,
         `cap_destinartario` varchar(5) DEFAULT NULL,
         `citta_destinatario` varchar(100) DEFAULT NULL,
         `selezionato` varchar(2) DEFAULT NULL,
         `inviato` varchar(100) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function elenco_destinatari_rolCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'rif_lettera, ';
    $sql .= 'codice, ';
    $sql .= 'scala, ';
    $sql .= 'interno, ';
    $sql .= 'nome_destinatario, ';
    $sql .= 'destinatario_riga1, ';
    $sql .= 'destinatario_riga2, ';
    $sql .= 'indir_destinatario, ';
    $sql .= 'civ_destinatario, ';
    $sql .= 'cap_destinartario, ';
    $sql .= 'citta_destinatario, ';
    $sql .= 'selezionato, ';
    $sql .= 'inviato ';
    $sql .= 'FROM elenco_destinatari_rol ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('elenco_destinatari_rol', $row);
    }
}
