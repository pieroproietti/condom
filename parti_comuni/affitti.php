<?php
function affittiCreate($ds, $dd)
{
    echo "Creazione affiti; \r\n";

    $dbstring = 'drop table `affitti`;';
    $dd->query($dbstring);

    $dbstring = '
    `Cod_appartamento` int(2) DEFAULT NULL,
    `Cod_stabile` int(4) DEFAULT NULL,
    `Proprietario_nome` varchar(200) DEFAULT NULL,
    `Proprietario_intesta` varchar(200) DEFAULT NULL,
    `Desriz_immobile` varchar(50) DEFAULT NULL,
    `Indirizzo_immob` varchar(50) DEFAULT NULL,
    `Cap` varchar(5) DEFAULT NULL,
    `Citta` varchar(50) DEFAULT NULL,
    `Pr` varchar(2) DEFAULT NULL,
    `Nome_inquilino` varchar(50) DEFAULT NULL,
    `Rendita_catastale` dbSingle4) DEFAULT NULL,
    `Importo_fitto` decimal(8) DEFAULT NULL,
    `Particella` varchar(50) DEFAULT NULL,
    `Destinazione_d_uso` varchar(50) DEFAULT NULL,
    `Inizio_contratto` dbDate8) DEFAULT NULL,
    `Ultimo_Rinnovo` dbDate8) DEFAULT NULL,
    `Prossima_scadenza` dbDate8) DEFAULT NULL,
    `Prossima_registrazione` dbDate8) DEFAULT NULL,
    `Note` dbMemo0) DEFAULT NULL,
    `Def_ammin` varchar(50) DEFAULT NULL,
    `Descr_1_voce` varchar(50) DEFAULT NULL,
    `tipo_riga` varchar(50) DEFAULT NULL,
    `Inte_cc` varchar(100) DEFAULT NULL,
    `IBAN` varchar(27) DEFAULT NULL,
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
