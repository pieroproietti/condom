<?php

function bolletteCrea($dd)
{
    echo "Creazione condom/bollette_det\r\n";

    $sql = '
    DROP TABLE IF EXISTS `bollette`;

    CREATE TABLE `bollette` (
    `id` int(11) DEFAULT NULL,
    `stabile_id` int(11) NOT NULL,
    `stabile_uuid` varchar(36) NOT NULL,

    `emissione_del` datetime DEFAULT NULL,
    `emissione_anno` varchar(9) DEFAULT NULL,
    `scadenza_del` datetime DEFAULT NULL,
    `riga_1_gestione` varchar(1) DEFAULT NULL,
    `riga_1_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_1_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_1_cartella` varchar(9) DEFAULT NULL,
    `riga_1_rata_nr` varchar(2) DEFAULT NULL,
    `riga_1_descrizione` varchar(35) DEFAULT NULL,
    `riga_1_calcolo` varchar(1) DEFAULT NULL,
    `riga_1_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_1_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_1_voce` varchar(15) DEFAULT NULL,

    `riga_2_gestione` varchar(1) DEFAULT NULL,
    `riga_2_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_2_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_2_cartella` varchar(9) DEFAULT NULL,
    `riga_2_rata_nr` varchar(2) DEFAULT NULL,
    `riga_2_descrizione` varchar(35) DEFAULT NULL,
    `riga_2_calcolo` varchar(1) DEFAULT NULL,
    `riga_2_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_2_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_2_voce` varchar(15) DEFAULT NULL,

    `riga_3_gestione` varchar(1) DEFAULT NULL,
    `riga_3_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_3_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_3_cartella` varchar(9) DEFAULT NULL,
    `riga_3_rata_nr` varchar(2) DEFAULT NULL,
    `riga_3_descrizione` varchar(35) DEFAULT NULL,
    `riga_3_calcolo` varchar(1) DEFAULT NULL,
    `riga_3_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_3_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_3_voce` varchar(15) DEFAULT NULL,

    `riga_4_gestione` varchar(1) DEFAULT NULL,
    `riga_4_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_4_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_4_cartella` varchar(9) DEFAULT NULL,
    `riga_4_rata_nr` varchar(2) DEFAULT NULL,
    `riga_4_descrizione` varchar(35) DEFAULT NULL,
    `riga_4_calcolo` varchar(1) DEFAULT NULL,
    `riga_4_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_4_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_4_voce` varchar(15) DEFAULT NULL,

    `riga_5_gestione` varchar(1) DEFAULT NULL,
    `riga_5_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_5_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_5_cartella` varchar(9) DEFAULT NULL,
    `riga_5_rata_nr` varchar(2) DEFAULT NULL,
    `riga_5_descrizione` varchar(35) DEFAULT NULL,
    `riga_5_calcolo` varchar(1) DEFAULT NULL,
    `riga_5_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_5_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_5_voce` varchar(15) DEFAULT NULL,

    `riga_6_gestione` varchar(1) DEFAULT NULL,
    `riga_6_staordinaria_nr` int(2) DEFAULT NULL,
    `riga_6_emissione_anno` varchar(9) DEFAULT NULL,
    `riga_6_cartella` varchar(9) DEFAULT NULL,
    `riga_6_rata_nr` varchar(2) DEFAULT NULL,
    `riga_6_descrizione` varchar(35) DEFAULT NULL,
    `riga_6_calcolo` varchar(1) DEFAULT NULL,
    `riga_6_esercizio_precedente` varchar(9) DEFAULT NULL,
    `riga_6_rata_precedente` varchar(2) DEFAULT NULL,
    `riga_6_voce` varchar(15) DEFAULT NULL,

    `note_avvisi` varchar(220) DEFAULT NULL,
    `note_ricevute` varchar(220) DEFAULT NULL,
    `note_ccp` varchar(120) DEFAULT NULL,
    `stampa` varchar(2) DEFAULT NULL,
    `provvisoria_definitiva` varchar(10) DEFAULT NULL,
    `ccp_1_2` varchar(1) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `bollette` ADD PRIMARY KEY (`id`);
    ALTER TABLE `bollette` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
    ';
    $dd->query($sql);
}

function bolletteImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    echo "Imporazione di: generale_stabile/emes_gen in: condom/bollette\r\n";

    $table = 'emes_gen';
    $columns = [
    'n_emissione      (id)',
    'dt_emissione     (emissione_del)',
    'anno_emissione   (emissione_anno)',
    'dt_scadenza      (scadenza_del)',

    'ges_1            (riga_1_gestione)',
    'n_stra_1         (riga_1_staordinaria_nr)',
    'e_anno_1         (riga_1_emissione_anno)',
    'dir_anno1        (riga_1_cartella)',
    'n_rata_1         (riga_1_rata_nr)',
    'descr_1          (riga_1_descrizione)',
    'forma_calcolo_1  (riga_1_calcolo)',
    'eserc_preced_1   (riga_1_esercizio_precedente)',
    'rata_prec_1      (riga_1_rata_precedente)',
    'voce_1           (riga_1_voce)',

    'ges_2            (riga_2_gestione)',
    'n_stra_2         (riga_2_staordinaria_nr)',
    'e_anno_2         (riga_2_emissione_anno)',
    'dir_anno2        (riga_2_cartella)',
    'n_rata_2         (riga_2_rata_nr)',
    'descr_2          (riga_2_descrizione)',
    'forma_calcolo_2  (riga_2_calcolo)',
    'eserc_preced_2   (riga_2_esercizio_precedente)',
    'rata_prec_2      (riga_2_rata_precedente)',
    'voce_2           (riga_2_voce)',

    'ges_3            (riga_3_gestione)',
    'n_stra_3         (riga_3_staordinaria_nr)',
    'e_anno_3         (riga_3_emissione_anno)',
    'dir_anno3        (riga_3_cartella)',
    'n_rata_3         (riga_3_rata_nr)',
    'descr_3          (riga_3_descrizione)',
    'forma_calcolo_3  (riga_3_calcolo)',
    'eserc_preced_3   (riga_3_esercizio_precedente)',
    'rata_prec_3      (riga_3_rata_precedente)',
    'voce_3           (riga_3_voce)',

    'ges_4            (riga_4_gestione)',
    'n_stra_4         (riga_4_staordinaria_nr)',
    'e_anno_4         (riga_4_emissione_anno)',
    'dir_anno4        (riga_4_cartella)',
    'n_rata_4         (riga_4_rata_nr)',
    'descr_4          (riga_4_descrizione)',
    'forma_calcolo_4  (riga_4_calcolo)',
    'eserc_preced_4   (riga_4_esercizio_precedente)',
    'rata_prec_4      (riga_4_rata_precedente)',
    'voce_4           (riga_4_voce)',

    'ges_5            (riga_5_gestione)',
    'n_stra_5         (riga_5_staordinaria_nr)',
    'e_anno_5         (riga_5_emissione_anno)',
    'dir_anno5        (riga_5_cartella)',
    'n_rata_5         (riga_5_rata_nr)',
    'descr_5          (riga_5_descrizione)',
    'forma_calcolo_5  (riga_5_calcolo)',
    'eserc_preced_5   (riga_5_esercizio_precedente)',
    'rata_prec_5      (riga_5_rata_precedente)',
    'voce_5           (riga_5_voce)',

    'ges_6            (riga_6_gestione)',
    'n_stra_6         (riga_6_staordinaria_nr)',
    'e_anno_6         (riga_6_emissione_anno)',
    'dir_anno6        (riga_6_cartella)',
    'n_rata_6         (riga_6_rata_nr)',
    'descr_6          (riga_6_descrizione)',
    'forma_calcolo_6  (riga_6_calcolo)',
    'eserc_preced_6   (riga_6_esercizio_precedente)',
    'rata_prec_6      (riga_6_rata_precedente)',
    'voce_6           (riga_6_voce)',

    'note_avvisi',
    'note_ricevute',
    'note_ccp',
    'stampa_sn        (stampa)',
    'provvisora_definitava (provvisoria_definitiva)',
    'ccp_1_2',
  ];

    $bollette = $ds->select($table, $columns);
    if (!empty($bollette)) {
        foreach ($bollette as &$bolletta) {
            $bolletta['stabile_id'] = $stabile_id;
            $bolletta['stabile_uuid'] = $stabile_uuid;
            $dd->insert('bollette', $bolletta);
        }
    } else {
        echo 'bollette empty';
    }
}
