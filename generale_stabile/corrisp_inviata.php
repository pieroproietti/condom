<?php

function corrisp_inviataCreate($ds, $dd)
{
  echo "Creazione generale_stabile/corrisp_inviata; \r\n";
    $dbstring = 'drop table `corrisp_inviata`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `corrisp_inviata` (
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
         `id_cond_for` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function corrisp_inviataCopy($ds, $dd)
{
  echo "Importazione da access di: corrisp_inviata da: generale_stabile/corrisp_inviata; \r\n";
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
    $sql .= 'id_cond_for ';
    $sql .= 'FROM corrisp_inviata ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('corrisp_inviata', $row);
    }
}
