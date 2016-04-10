<?php

function amministratoreCreate($ds, $dd)
{
    echo "Creazione amministratore; \r\n";

    $dbstring = 'drop table `amministratore`;';
    $dd->query($dbstring);

    $dbstring = '
                CREATE TABLE `amministratore` (
                    `id` int(11) DEFAULT NULL,
                    `Nome` varchar(40) DEFAULT NULL,
                    `Indirizzo` varchar(40) DEFAULT NULL,
                    `cap` varchar(5) DEFAULT NULL,
                    `citta` varchar(30) DEFAULT NULL,
                    `pr` varchar(2) DEFAULT NULL,
                    `P_iva` varchar(16) DEFAULT NULL,
                    `cod_fisc` varchar(16) DEFAULT NULL,
                    `intestazione` text DEFAULT NULL,
                    `Cod_fornitore` int(11) DEFAULT NULL,
                    `cod_cont_amm` varchar(3) DEFAULT NULL,
                    `Indirizzo_Email` varchar(150) DEFAULT NULL,
                    `internet_codice_amm` varchar(5) DEFAULT NULL,
                    `internet_Password` varchar(50) DEFAULT NULL,
                    `telefoni` varchar(50) DEFAULT NULL,
                    `Fax` varchar(50) DEFAULT NULL,
                    `Cellulare` varchar(50) DEFAULT NULL,
                    `Sito_personale` varchar(100) DEFAULT NULL,
                    `intestaz_sito` varchar(100) DEFAULT NULL,
                    `logo` varchar(50) DEFAULT NULL,
                    `PT_pw` varchar(15) DEFAULT NULL,
                    `orari` varchar(150) DEFAULT NULL,
                    `Compensi_1` varchar(100) DEFAULT NULL,
                    `Compensi_2` varchar(100) DEFAULT NULL,
                    `Compensi_3` varchar(100) DEFAULT NULL,
                    `Profess_non_regolam` smallint DEFAULT NULL,
                    `Sfondo_su_fatture` int(3) DEFAULT NULL,
                    `Applico_Rda` varchar(2) DEFAULT NULL,
                    `Logo_su_fatture` smallint DEFAULT 1
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';

    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function amministratoreCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'Nome, ';
    $sql .= 'Indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'citta, ';
    $sql .= 'pr, ';
    $sql .= 'P_iva, ';
    $sql .= 'cod_fisc, ';
    $sql .= 'intestazione, ';
    $sql .= 'Cod_fornitore, ';
    $sql .= 'cod_cont_amm, ';
    $sql .= 'Indirizzo_Email, ';
    $sql .= 'internet_codice_amm, ';
    $sql .= 'internet_Password, ';
    $sql .= 'telefoni, ';
    $sql .= 'Fax, ';
    $sql .= 'Cellulare, ';
    $sql .= 'Sito_personale, ';
    $sql .= 'intestaz_sito, ';
    $sql .= 'logo, ';
    $sql .= 'PT_pw, ';
    $sql .= 'orari, ';
    $sql .= 'Compensi_1, ';
    $sql .= 'Compensi_2, ';
    $sql .= 'Compensi_3, ';
    $sql .= 'Profess_non_regolam, ';
    $sql .= 'Sfondo_su_fatture, ';
    $sql .= 'Applico_Rda, ';
    $sql .= 'Logo_su_fatture ';
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
