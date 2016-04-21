<?php

function acquaGeneraliCrea($dd)
{
    $sql = '
    CREATE TABLE `acqua_generali` (
    `id` int(11) NOT NULL,
    `stabile_id` int(11) NOT NULL,
    `stabile_uuid` varchar(36) NOT NULL,
    `rif_ute` int(2) DEFAULT NULL,
    `rif_anno` varchar(9) DEFAULT NULL,
    `nom_ute` varchar(50) DEFAULT NULL,
    `ac_ripdif` varchar(10) DEFAULT NULL,
    `ripart_precedente` int(2) DEFAULT NULL,
    `n_trimestri` int(2) DEFAULT NULL,
    `max_fascia` varchar(1) DEFAULT NULL,
    `ac_ors` varchar(1) DEFAULT NULL,
    `n_stra` int(2) DEFAULT NULL,
    `ac_tabella` varchar(6) DEFAULT NULL,
    `ac_pre_con` varchar(10) DEFAULT NULL,
    `descriz_1` varchar(40) DEFAULT NULL,
    `descriz_2` varchar(40) DEFAULT NULL,
    `descriz_3` varchar(40) DEFAULT NULL,
    `descriz_4` varchar(40) DEFAULT NULL,
    `importo_ft_1` int(4) DEFAULT NULL,
    `importo_ft_1_euro` decimal(10,2) DEFAULT NULL,
    `importo_ft_2` int(4) DEFAULT NULL,
    `importo_ft_2_euro` decimal(10,2) DEFAULT NULL,
    `importo_ft_3` int(4) DEFAULT NULL,
    `importo_ft_3_euro` decimal(10,2) DEFAULT NULL,
    `importo_ft_4` int(4) DEFAULT NULL,
    `importo_ft_4_euro` decimal(10,2) DEFAULT NULL,
    `di_cui_parti_uguali` int(4) DEFAULT NULL,
    `di_cui_parti_uguali_euro` decimal(10,2) DEFAULT NULL,
    `di_cui_millesimale` int(4) DEFAULT NULL,
    `di_cui_millesimale_euro` decimal(10,2) DEFAULT NULL,
    `di_cui_prop_consumi` int(4) DEFAULT NULL,
    `di_cui_prop_consumi_euro` decimal(10,2) DEFAULT NULL,
    `di_cui_personali` int(4) DEFAULT NULL,
    `di_cui_personali_euro` decimal(10,2) DEFAULT NULL,
    `altre_letturazione` int(4) DEFAULT NULL,
    `altre_letturazione_euro` decimal(10,2) DEFAULT NULL,
    `altre_descr_1` varchar(40) DEFAULT NULL,
    `altre_descr_2` varchar(40) DEFAULT NULL,
    `altre_importo_1` int(4) DEFAULT NULL,
    `altre_importo_1_euro` decimal(10,2) DEFAULT NULL,
    `altre_importo_2` int(4) DEFAULT NULL,
    `altre_importo_2_euro` decimal(10,2) DEFAULT NULL,
    `altre_forma_ripart_1` varchar(1) DEFAULT NULL,
    `altre_forma_ripart_2` varchar(1) DEFAULT NULL,
    `criterio_tariffazione` int(2) DEFAULT NULL,
    `n_mesi` int(2) DEFAULT NULL,
    `tariffa_periodo` varchar(6) DEFAULT NULL,
    `note` text DEFAULT NULL,
    `note_acqua` text DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `acqua_generali` ADD PRIMARY KEY (`id`);
    ALTER TABLE `acqua_generali` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
    ';
    $dd->query($sql);
}

function acquaGeneraliImporta($ds, $dd,  $stabile_id, $stabile_uuid)
  {
      $table = 'acqua_gen';
      $columns = [
        'rif_ute',
        'rif_anno',
        'nom_ute',
        'ac_ripdif',
        'ripart_precedente',
        'n_trimestri',
        'max_fascia',
        'ac_ors',
        'n_stra',
        'ac_tabella',
        'ac_pre_con',
        'descriz_1',
        'descriz_2',
        'descriz_3',
        'descriz_4',
        'importo_ft_1',
        'importo_ft_1_euro',
        'importo_ft_2',
        'importo_ft_2_euro',
        'importo_ft_3',
        'importo_ft_3_euro',
        'importo_ft_4',
        'importo_ft_4_euro',
        'di_cui_parti_uguali',
        'di_cui_parti_uguali_euro',
        'di_cui_millesimale',
        'di_cui_millesimale_euro',
        'di_cui_prop_consumi',
        'di_cui_prop_consumi_euro',
        'di_cui_personali',
        'di_cui_personali_euro',
        'altre_letturazione',
        'altre_letturazione_euro',
        'altre_descr_1',
        'altre_descr_2',
        'altre_importo_1',
        'altre_importo_1_euro',
        'altre_importo_2',
        'altre_importo_2_euro',
        'altre_forma_ripart_1',
        'altre_forma_ripart_2',
        'criterio_tariffazione',
        'n_mesi',
        'tariffa_periodo',
        'note',
        'note_acqua'
      ];

      $acquaGenerali = $ds->select($table, $columns);
      if (!empty($acquaGenerali)) {
          foreach ($acquaGenerali as &$acquaGenerale) {
            print_r($acquaGenerale);
            $acquaGenerale['stabile_id']=$stabile_id;
            $acquaGenerale['stabile_uuid']=$stabile_uuid;
            $dd->insert('acqua_generali',$acquaGenerale);
          }
      }
  }
