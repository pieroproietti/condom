<?php

function aceaTariffeCrea($dd)
{
    $sql = '
CREATE TABLE `acea_tariffe` (
  `id` int(11) DEFAULT 0 NOT NULL,
  `contratto_id` int(11) DEFAULT NULL,
  `codice` varchar(3) DEFAULT NULL,
  `descrizione` varchar(45) DEFAULT NULL,
  `mci` decimal(10,2) DEFAULT NULL,
  `mc_agevolati_da` decimal(10,2) DEFAULT NULL,
  `mc_agevolati_a` decimal(10,2) DEFAULT NULL,
  `tariffa_agevolata_euro` decimal(10,2) DEFAULT NULL,
  `mc_base_da` decimal(10,2) DEFAULT NULL,
  `mc_base_a` decimal(10,2) DEFAULT NULL,
  `tariffa_base_euro` decimal(10,2) DEFAULT NULL,
  `mc_1ecc_da` decimal(10,2) DEFAULT NULL,
  `mc_1ecc_a` decimal(10,2) DEFAULT NULL,
  `tariffa_1_euro` decimal(10,2) DEFAULT NULL,
  `mc_2ecc_da` decimal(10,2) DEFAULT NULL,
  `mc_2ecc_a` decimal(10,2) DEFAULT NULL,
  `tariffa_2_euro` decimal(10,2) DEFAULT NULL,
  `tariffa_3_euro` decimal(10,2) DEFAULT NULL,
  `tariffa_depurazione_euro` decimal(10,2) DEFAULT NULL,
  `tariffa_fognature_euro` decimal(10,2) DEFAULT NULL,
  `tariffa_contrib_solidarieta` decimal(10,2) DEFAULT NULL,
  `quota_fissa` decimal(10,2) DEFAULT NULL,
  `tipo_riga` varchar(50) DEFAULT NULL,
  `periodo` varchar(6) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

  ALTER TABLE `acea_tariffe` ADD PRIMARY KEY (`id`);
  ALTER TABLE `acea_tariffe` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ';
      $dd->query($sql);
  }

function aceaTariffeImporta($ds, $dd)
{
  $table = 'tariffe_acea_standard';
  $columns = [
    'id_contratto (contratto_id)',
    'codice',
    'descrizione',
    'mci',
    'mc_agevolati_da',
    'mc_agevolati_a',
    'tariffa_agevolata_euro',
    'mc_base_da',
    'mc_base_a',
    'tariffa_base_euro',
    'mc_1ecc_da',
    'mc_1ecc_a',
    'tariffa_1_euro',
    'mc_2ecc_da',
    'mc_2ecc_a',
    'tariffa_2_euro',
    'tariffa_3_euro',
    'tariffa_depurazione_euro',
    'tariffa_fognature_euro',
    'tariffa_contrib_solidarieta',
    'quota_fissa',
    'tipo_riga',
    'periodo'
  ];

  $aceaTariffe = $ds->select($table, $columns);
  if (!empty($aceaTariffe)) {
      foreach ($aceaTariffe as &$aceaTariffa) {
          $dd->insert('acea_tariffe', $aceaTariffa);
      }
  }
}
