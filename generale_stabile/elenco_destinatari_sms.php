<?php

function elenco_destinatari_smsCreate($ds, $dd)
{
  echo "Creazione generale_stabile/elenco_destinatari_sms; \r\n";
    $dbstring = 'drop table `elenco_destinatari_sms`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `elenco_destinatari_sms` (
         `rif_lettera` int(4) DEFAULT NULL,
         `codice` int(4) DEFAULT NULL,
         `scala` varchar(20) DEFAULT NULL,
         `interno` varchar(20) DEFAULT NULL,
         `nome_destinatario` varchar(100) DEFAULT NULL,
         `cell_destinatario` varchar(150) DEFAULT NULL,
         `selezionato` varchar(2) DEFAULT NULL,
         `c_i` varchar(1) DEFAULT NULL,
         `id_cond` int(4) DEFAULT NULL,
         `inviato` varchar(200) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `selez_abituale` varchar(2) DEFAULT NULL,
         `id_compr` int(4) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function elenco_destinatari_smsCopy($ds, $dd)
{
  echo "Importazione da access di: elenco_destinatari_sms in: generale_stabile/elenco_destinatari_sms; \r\n";
    $sql = 'SELECT ';
    $sql .= 'rif_lettera, ';
    $sql .= 'codice, ';
    $sql .= 'scala, ';
    $sql .= 'interno, ';
    $sql .= 'nome_destinatario, ';
    $sql .= 'cell_destinatario, ';
    $sql .= 'selezionato, ';
    $sql .= 'c_i, ';
    $sql .= 'id_cond, ';
    $sql .= 'inviato, ';
    $sql .= 'importo, ';
    $sql .= 'selez_abituale, ';
    $sql .= 'id_compr ';
    $sql .= 'FROM elenco_destinatari_sms ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('elenco_destinatari_sms', $row);
    }
}
