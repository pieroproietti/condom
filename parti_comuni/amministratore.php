<?php

function amministratoreCreate($ds, $dd)
{
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
         `cod_fornitore` int(4) DEFAULT NULL,
         `cod_cont_amm` varchar(3) DEFAULT NULL,
         `indirizzo_email` varchar(150) DEFAULT NULL,
         `internet_codice_amm` varchar(5) DEFAULT NULL,
         `internet_password` varchar(50) DEFAULT NULL,
         `telefoni` varchar(50) DEFAULT NULL,
         `fax` varchar(50) DEFAULT NULL,
         `cellulare` varchar(50) DEFAULT NULL,
         `sito_personale` varchar(100) DEFAULT NULL,
         `intestaz_sito` varchar(100) DEFAULT NULL,
         `logo` varchar(50) DEFAULT NULL,
         `pt_pw` varchar(15) DEFAULT NULL,
         `orari` varchar(150) DEFAULT NULL,
         `compensi_1` varchar(100) DEFAULT NULL,
         `compensi_2` varchar(100) DEFAULT NULL,
         `compensi_3` varchar(100) DEFAULT NULL,
         `profess_non_regolam` smallint DEFAULT NULL,
         `sfondo_su_fatture` int(2) DEFAULT NULL,
         `applico_rda` varchar(2) DEFAULT NULL,
         `logo_su_fatture` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function amministratoreCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'nome, ';
    $sql .= 'indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'p_iva, ';
    $sql .= 'cod_fisc, ';
    $sql .= 'intestazione, ';
    $sql .= 'cod_fornitore, ';
    $sql .= 'cod_cont_amm, ';
    $sql .= 'indirizzo_email, ';
    $sql .= 'internet_codice_amm, ';
    $sql .= 'internet_password, ';
    $sql .= 'telefoni, ';
    $sql .= 'fax, ';
    $sql .= 'cellulare, ';
    $sql .= 'sito_personale, ';
    $sql .= 'intestaz_sito, ';
    $sql .= 'logo, ';
    $sql .= 'pt_pw, ';
    $sql .= 'orari, ';
    $sql .= 'compensi_1, ';
    $sql .= 'compensi_2, ';
    $sql .= 'compensi_3, ';
    $sql .= 'profess_non_regolam, ';
    $sql .= 'sfondo_su_fatture, ';
    $sql .= 'applico_rda, ';
    $sql .= 'logo_su_fatture ';
    $sql .= 'FROM amministratore ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('amministratore', $row);
    }
}
