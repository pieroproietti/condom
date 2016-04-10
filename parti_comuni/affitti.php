<?php
function affittiCreate($ds, $dd)
{
    echo "Creazione affiti; \r\n";

    $dbstring = 'drop table `affitti`;';
    $dd->query($dbstring);

    $dbstring = '
                CREATE TABLE `affitti` (
                  `id` int(11) DEFAULT NULL,
                  `appartamento_id` int(3) DEFAULT NULL,
                  `stabile_id` int(3) DEFAULT NULL,
                  `proprietario` varchar(200) DEFAULT NULL,
                  `proprietario_intestazione` varchar(200) DEFAULT NULL,
                  `immobile_descrizione` varchar(50) DEFAULT NULL,
                  `immobile_indirizzo` varchar(50) DEFAULT NULL,
                  `cap` varchar(5) DEFAULT NULL,
                  `comune` varchar(50) DEFAULT NULL,
                  `provincia` varchar(2) DEFAULT NULL,
                  `inquilino` varchar(50) DEFAULT NULL,
                  `affitto_importo` decimal(10,2) DEFAULT NULL,
                  `catasto_rendita` decimal(10,2) DEFAULT NULL,
                  `catasto_particella` varchar(50) DEFAULT NULL,
                  `catasto_destinazione` varchar(50) DEFAULT NULL,
                  `contratto_del` datetime DEFAULT NULL,
                  `contratto_rinnovo_del` datetime DEFAULT NULL,
                  `contratto_scadenza_del` datetime DEFAULT NULL,
                  `contratto_scadenza_registrazione_del` datetime DEFAULT NULL,
                  `note` text,
                  `def_ammin` varchar(50) DEFAULT NULL,
                  `descrizione_1_voce` varchar(50) DEFAULT NULL,
                  `tipo_riga` varchar(50) DEFAULT NULL,
                  `intestazione_cc` varchar(100) DEFAULT NULL,
                  `iban` varchar(27) DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

                -- ALTER TABLE `affitti` ADD PRIMARY KEY (`id`);
                -- ALTER TABLE `affitti` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                 ';

    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function affittiCopy($ds, $dd)
{
    $tableSource = 'affitti';

    $sql = 'SELECT ';
    $sql .= 'Cod_appartamento       AS appartamento_id, ';
    $sql .= 'Cod_stabile            AS stabile_id, ';
    $sql .= 'Proprietario_nome      AS proprietario, ';
    $sql .= 'Proprietario_intesta   AS proprietario_intestazione, ';
    $sql .= 'Desriz_immobile        AS immobile_descrizione, ';
    $sql .= 'Indirizzo_immob        AS immobile_indirizzo, ';
    $sql .= 'cap, ';
    $sql .= 'Citta                  AS comune, ';
    $sql .= 'Pr                     AS provincia, ';
    $sql .= 'Nome_inquilino         AS inquilino, ';
    $sql .= 'Importo_fitto          AS affitto_importo, ';
    $sql .= 'Rendita_catastale      AS catasto_rendita, ';
    $sql .= 'Particella             AS catasto_particella, ';
    $sql .= 'Destinazione_d_uso     AS catasto_destinazione, ';
    $sql .= 'Inizio_contratto       AS contratto_del, ';
    $sql .= 'Ultimo_Rinnovo         AS contratto_rinnovo_del, ';
    $sql .= 'Prossima_scadenza      AS contratto_scadenza_del, ';
    $sql .= 'Prossima_registrazione AS contratto_scadenza_registrazione_del, ';
    $sql .= 'note, ';
    $sql .= 'Def_ammin, ';
    $sql .= 'Descr_1_voce           AS descrizione_1_voce, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'Inte_cc                AS intestazione_cc, ';
    $sql .= 'iban ';
    $sql .= 'FROM affitti ';
    $sql .= 'WHERE 1';

        echo '<br/>';
        echo $sql;
        echo '<br/>';

        $rows = $ds->query($sql, PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            $dd->insert('affitti', $row);
        }
    }
