<?php

function scadenzeCrea($dd)
{
  echo "Creazione condom\scadenze; \r\n";

    $sql = '
CREATE TABLE `scadenze` (
  `id` int(11) DEFAULT 0 NOT NULL,
  `scadenza_del` datetime DEFAULT NULL,
  `scadenza_ora` varchar(5) DEFAULT NULL,
  `stabile_id` int(2) DEFAULT NULL,
  `stabile_uuid` varchar(36) NULL,
  `in_breve` varchar(100) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `assemblea_nr` int(2) DEFAULT NULL,
  `gest_ors` varchar(1) DEFAULT NULL,
  `n_stra` int(2) DEFAULT NULL,
  `anno` varchar(9) DEFAULT NULL,
  `rata` varchar(2) DEFAULT NULL,
  `fatto` varchar(2) DEFAULT NULL,
  `tipo_riga` varchar(50) DEFAULT NULL,
  `natura` varchar(1) DEFAULT NULL,
  `f24_riferimento` int(4) DEFAULT NULL,
  `f24_importo` decimal(10,2) DEFAULT NULL,
  `avviso_richiesto` varchar(2) DEFAULT NULL,
  `avviso_anticipo` int(2) DEFAULT NULL,
  `avviso_dal` datetime DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  ALTER TABLE `scadenze` ADD PRIMARY KEY (`id`);
  ';
    $dd->query($sql);
}

function scadenzeImporta($ds, $dd)
{
    $table = 'scadenze';
    $columns = [
      'id_scadenza        (id)',
      'dt_scadenza        (scadenza_del)',
      'ora_scadenza       (scadenza_ora)',
      'cod_stabile        (stabile_id)',
      'descriz_sintetica  (in_breve)',
      'descriz_lunga      (descrizione)',
      'num_assemblea      (assemblea_nr)',
      'gest_ors',
      'n_stra',
      'anno',
      'rata',
      'fatto',
      'tipo_riga',
      'natura',
      'rif_f24            (f24_riferimento)',
      'importo_f24        (f24_importo)',
      'richiede_pop_up    (avviso_richiesto)',
      'gg_anticipo        (avviso_anticipo)',
      'pop_up_dal         (avviso_dal)',
      ];

    $scadenze = $ds->select($table, $columns);

    if (!empty($scadenze)) {
        foreach ($scadenze as &$scadenza) {
            $stabile_uuid = stabile_uuid($dd, $scadenza['stabile_id']);
            $scadenza['stabile_uuid'] = $stabile_uuid;
            $dd->insert('scadenze', $scadenza);
        }
    }
}
