<?php

function amministratoreCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/amministratore; \r\n";

    $dbstring = 'drop table `amministratore`;';
    echo "Creazione amministratore; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `amministratore` (
         `nome` varchar(40) DEFAULT NULL,
         `indirizzo` varchar(40) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(30) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `p_iva` varchar(16) DEFAULT NULL,
         `cod_fisc` varchar(16) DEFAULT NULL,
         `intestazione` text DEFAULT NULL,
         `indirizzo_email` varchar(150) DEFAULT NULL,
         `profess_non_regolam` smallint DEFAULT NULL,
         `telefoni` varchar(50) DEFAULT NULL,
         `fax` varchar(50) DEFAULT NULL,
         `cellulare` varchar(50) DEFAULT NULL,
         `orari` varchar(150) DEFAULT NULL,
         `compensi_1` varchar(100) DEFAULT NULL,
         `compensi_2` varchar(100) DEFAULT NULL,
         `compensi_3` varchar(100) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function amministratoreCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/amministratore; \r\n";
    $sql = 'SELECT ';
    $sql .= 'nome, ';
    $sql .= 'indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'p_iva, ';
    $sql .= 'cod_fisc, ';
    $sql .= 'intestazione, ';
    $sql .= 'indirizzo_email, ';
    $sql .= 'profess_non_regolam, ';
    $sql .= 'telefoni, ';
    $sql .= 'fax, ';
    $sql .= 'cellulare, ';
    $sql .= 'orari, ';
    $sql .= 'compensi_1, ';
    $sql .= 'compensi_2, ';
    $sql .= 'compensi_3 ';
    $sql .= 'FROM amministratore ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('amministratore', $row);
    }
}
