<?php

function acquaDettagliCrea($dd)
{
    echo "Creazione condom/acqua_dettagli\r\n";

    $sql = '
    DROP TABLE IF EXISTS `acqua_dettagli`;
    CREATE TABLE `acqua_dettagli` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `rif_ute` int(2) DEFAULT NULL,
      `id_cond` int(4) DEFAULT NULL,
      `cond_inquil` varchar(1) DEFAULT NULL,
      `t_cod_cond` int(2) DEFAULT NULL,
      `t_scala` varchar(10) DEFAULT NULL,
      `t_interno` varchar(10) DEFAULT NULL,
      `t_nome` varchar(50) DEFAULT NULL,
      `tipo_utenza` varchar(3) DEFAULT NULL,
      `num_utenze` int(2) DEFAULT NULL,
      `lett_vecchia_1` int(4) DEFAULT NULL,
      `lett_nuova_1` int(4) DEFAULT NULL,
      `lett_vecchia_2` int(4) DEFAULT NULL,
      `lett_nuova_2` int(4) DEFAULT NULL,
      `lett_vecchia_3` int(4) DEFAULT NULL,
      `lett_nuova_3` int(4) DEFAULT NULL,
      `consumo` int(4) DEFAULT NULL,
      `acq_personali` int(4) DEFAULT NULL,
      `acq_personali_euro` decimal(10,2) DEFAULT NULL,
      `alt1_personali` int(4) DEFAULT NULL,
      `alt1_personali_euro` decimal(10,2) DEFAULT NULL,
      `alt2_personali` int(4) DEFAULT NULL,
      `alt2_personali_euro` decimal(10,2) DEFAULT NULL,
      `cons_1` int(4) DEFAULT NULL,
      `cons_2` int(4) DEFAULT NULL,
      `cons_3` int(4) DEFAULT NULL,
      `cons_4` int(4) DEFAULT NULL,
      `cons_5` int(4) DEFAULT NULL,
      `importo_1` int(4) DEFAULT NULL,
      `importo_2` int(4) DEFAULT NULL,
      `importo_3` int(4) DEFAULT NULL,
      `importo_4` int(4) DEFAULT NULL,
      `importo_5` int(4) DEFAULT NULL,
      `acq_a_consumo` int(4) DEFAULT NULL,
      `alt1_a_consumo` int(4) DEFAULT NULL,
      `alt2_a_consumo` int(4) DEFAULT NULL,
      `acq_a_millesimi` int(4) DEFAULT NULL,
      `alt1_a_millesimi` int(4) DEFAULT NULL,
      `alt2_a_millesimi` int(4) DEFAULT NULL,
      `importo_depurazione` int(4) DEFAULT NULL,
      `importo_fognature` int(4) DEFAULT NULL,
      `acq_uguali` int(4) DEFAULT NULL,
      `alt1_uguali` int(4) DEFAULT NULL,
      `alt2_uguali` int(4) DEFAULT NULL,
      `differenza_acqua` int(4) DEFAULT NULL,
      `iva` int(4) DEFAULT NULL,
      `quota_letture` int(4) DEFAULT NULL,
      `tipo_lettura` varchar(2) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `acqua_dettagli` ADD PRIMARY KEY (`id`);
    ALTER TABLE `acqua_dettagli` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
    ';
    $dd->query($sql);
}

function acquaDettagliImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    echo "Imporazione di: generale_stabile/acqua_dett in: condom/acqua_dettagli\r\n";

    $table = 'acqua_dett';
    $columns = [
        'rif_ute',
        'id_cond',
        'cond_inquil',
        't_cod_cond',
        't_scala',
        't_interno',
        't_nome',
        'tipo_utenza',
        'num_utenze',
        'lett_vecchia_1',
        'lett_nuova_1',
        'lett_vecchia_2',
        'lett_nuova_2',
        'lett_vecchia_3',
        'lett_nuova_3',
        'consumo',
        'acq_personali',
        'acq_personali_euro',
        'alt1_personali',
        'alt1_personali_euro',
        'alt2_personali',
        'alt2_personali_euro',
        'cons_1',
        'cons_2',
        'cons_3',
        'cons_4',
        'cons_5',
        'importo_1',
        'importo_2',
        'importo_3',
        'importo_4',
        'importo_5',
        'acq_a_consumo',
        'alt1_a_consumo',
        'alt2_a_consumo',
        'acq_a_millesimi',
        'alt1_a_millesimi',
        'alt2_a_millesimi',
        'importo_depurazione',
        'importo_fognature',
        'acq_uguali',
        'alt1_uguali',
        'alt2_uguali',
        'differenza_acqua',
        'iva',
        'quota_letture',
        'tipo_lettura',
      ];

    $acquaDettagli = $ds->select($table, $columns);
    if (!empty($acquaDettagli)) {
        foreach ($acquaDettagli as &$acquaDettaglio) {
            $acquaDettaglio['stabile_id'] = $stabile_id;
            $acquaDettaglio['stabile_uuid'] = $stabile_uuid;
            $dd->insert('acqua_dettagli', $acquaDettaglio);
        }
    }
}
