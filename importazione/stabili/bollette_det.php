<?php

function bolletteDetCrea($dd)
{
    echo "Creazione condom/bollette_det;\n\r";

    $sql = '
    DROP TABLE IF EXISTS `bollette_det`;
    CREATE TABLE `bollette_det` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `cod_cond` int(4) DEFAULT NULL,
      `c_i` varchar(1) DEFAULT NULL,
      `raggruppamento` int(4) DEFAULT NULL,
      `emissione_nr` int(2) DEFAULT NULL,
      `emissione_anno` varchar(9) DEFAULT NULL,
      `ricevuta_nr` int(4) DEFAULT NULL,
      `mese_nr` varchar(2) DEFAULT NULL,
      `o_r_s` varchar(1) DEFAULT NULL,
      `importo_dovuto` int(4) DEFAULT NULL,
      `importo_dovuto_euro` decimal(10,2) DEFAULT NULL,
      `descrizione` varchar(35) DEFAULT NULL,
      `emissione_del` datetime DEFAULT NULL,
      `n_stra` int(2) DEFAULT NULL,
      `anno_gestione` varchar(9) DEFAULT NULL,
      `d_e_p` varchar(1) DEFAULT NULL,
      `resta_da_compensare` decimal(10,2) DEFAULT NULL,
      `str_orig` int(2) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `bollette_det` ADD PRIMARY KEY (`id`);
      ALTER TABLE `bollette_det` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

function bolletteDetImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    echo "Imporazione di: generale_stabile/emes_det in: condom/bollette_det\r\n";

    $table = 'emes_det';
    $columns = [
        'cod_cond',
        'cond_inq                       (c_i)',
        'raggruppamento',
        'n_emissione                    (emissione_nr)',
        'anno_emissione                 (emissione_anno)',
        'n_ricevuta                     (ricevuta_nr)',
        'n_mese                         (mese_nr)',
        'o_r_s',
        'importo_dovuto',
        'importo_dovuto_euro',
        'descrizione',
        'dt_emissione_pagamento         (emissione_del)',
        'n_stra',
        'anno_gestione',
        'd_e_p',
        'resta_da_compensare',
        'str_orig',
      ];

    $bolletteDet = $ds->select($table, $columns);

    if (!empty($bolletteDet)) {
        foreach ($bolletteDet as &$bollettaDet) {
            $bollettaDet['stabile_id'] = $stabile_id;
            $bollettaDet['stabile_uuid'] = $stabile_uuid;
            $dd->insert('bollette_det', $bollettaDet);
        }
    }
}
