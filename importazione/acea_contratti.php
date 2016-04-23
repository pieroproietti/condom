<?php

function aceaContrattiCrea($dd)
{
    echo "Creazione condom/acea_contratti;\n\r";

    $sql = '
    CREATE TABLE `acea_contratti` (
      `id` int(11) DEFAULT 0 NOT NULL,
      `codice` varchar(3) DEFAULT NULL,
      `descrizione` varchar(45) DEFAULT NULL,
      `mc_agevolati` decimal(10,2) DEFAULT NULL,
      `tariffa_agevolata` int(4) DEFAULT NULL,
      `tariffa_agevolata_euro` decimal(10,2) DEFAULT NULL,
      `mc_base` decimal(10,2) DEFAULT NULL,
      `tariffa_base` int(4) DEFAULT NULL,
      `tariffa_base_euro` decimal(10,2) DEFAULT NULL,
      `mc_1` decimal(10,2) DEFAULT NULL,
      `tariffa_1` int(4) DEFAULT NULL,
      `tariffa_1_euro` decimal(10,2) DEFAULT NULL,
      `mc_2` decimal(10,2) DEFAULT NULL,
      `tariffa_2` int(4) DEFAULT NULL,
      `tariffa_2_euro` decimal(10,2) DEFAULT NULL,
      `tariffa_3` int(4) DEFAULT NULL,
      `tariffa_3_euro` decimal(10,2) DEFAULT NULL,
      `tariffa_depurazione` int(4) DEFAULT NULL,
      `tariffa_depurazione_euro` decimal(10,2) DEFAULT NULL,
      `tariffa_fognature` int(4) DEFAULT NULL,
      `tariffa_fognature_euro` decimal(10,2) DEFAULT NULL,
      `tipo_riga` varchar(50) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

    ALTER TABLE `acea_contratti` ADD PRIMARY KEY (`id`);  ';

    $dd->query($sql);
}

function aceaContrattiImporta($ds, $dd)
{
  
  echo "Importazione di: parti_comuni/contratti_acea in: condom/acea_contratti;\n\r";

    $table = 'contratti_acea';
    $columns = [
        'id_contratto (id)',
        'codice',
        'descrizione',
        'mc_agevolati',
        'tariffa_agevolata',
        'tariffa_agevolata_euro',
        'mc_base',
        'tariffa_base',
        'tariffa_base_euro',
        'mc_1',
        'tariffa_1',
        'tariffa_1_euro',
        'mc_2',
        'tariffa_2',
        'tariffa_2_euro',
        'tariffa_3',
        'tariffa_3_euro',
        'tariffa_depurazione',
        'tariffa_depurazione_euro',
        'tariffa_fognature',
        'tariffa_fognature_euro',
        'tipo_riga',
      ];

    $aceaContratti = $ds->select($table, $columns);
    if (!empty($aceaContratti)) {
        foreach ($aceaContratti as &$aceaContratto) {
            $dd->insert('acea_contratti', $aceaContratto);
        }
    }
}
