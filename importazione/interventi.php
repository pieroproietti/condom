<?php

function interventiCrea($dd)
{
  echo "Creazione condom\interventi; \r\n";

    $sql = '
CREATE TABLE `interventi` (
  `id` int(11) DEFAULT NULL,
  `stabile_id` int(11) DEFAULT NULL,
  `stabile_uuid` varchar(36) NULL,
  `intervento_codice` int(4) DEFAULT NULL,
  `segnalazione_del` datetime DEFAULT NULL,
  `stabile_denominazione` varchar(80) DEFAULT NULL,
  `oggetto` varchar(250) DEFAULT NULL,
  `comunicato_da` varchar(100) DEFAULT NULL,
  `chiamata_tecnico_del` datetime DEFAULT NULL,
  `chiamata_tecnico2_del` datetime DEFAULT NULL,
  `chiamata_tecnico_descrizione` varchar(100) DEFAULT NULL,
  `chiamata_tecnico2_descrizione` varchar(100) DEFAULT NULL,
  `intervento_del` datetime DEFAULT NULL,
  `intervento2_del` datetime DEFAULT NULL,
  `intervento_descrizione` varchar(100) DEFAULT NULL,
  `intervento2_descrizione` varchar(100) DEFAULT NULL,
  `risolto` varchar(2) DEFAULT NULL,
  `annotazioni` text DEFAULT NULL,
  `tipo_riga` varchar(50) DEFAULT NULL,
  `fornitore_id` int(11) DEFAULT NULL,
  `segnal_ora` varchar(5) DEFAULT NULL,
  `chiamante_cia` varchar(10) DEFAULT NULL,
  `chiamante_codice` int(4) DEFAULT NULL,
  `importo` decimal(10,2) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

  ALTER TABLE `interventi` ADD PRIMARY KEY (`id`);
  ';
      $dd->query($sql);
}

function interventiImporta($ds, $dd)
  {
      $table = 'interventi';
      $columns = [
        'id_intervento          (id)',
        'segnal_cod_sta         (stabile_id)',
        'cod_intervento         (intervento_codice)',
        'segnal_data            (segnalazione_del)',
        'denomin_stabile        (stabile_denominazione)',
        'oggetto',
        'comunicato_da',
        'chiam_tecnico_dt1      (chiamata_tecnico_del)',
        'chiam_tecnico_dt2      (chiamata_tecnico2_del)',
        'chiam_tecnico_descr1   (chiamata_tecnico_descrizione)',
        'chiam_tecnico_descr2   (chiamata_tecnico2_descrizione)',
        'interv_dt1             (intervento_del)',
        'interv_dt2             (intervento2_del)',
        'interv_descr1          (intervento_descrizione)',
        'interv_descr2          (intervento2_descrizione)',
        'risolto',
        'note                   (annotazioni)',
        'tipo_riga',
        'cod_fornitore          (fornitore_id)',
        'segnal_ora',
        'chiamante_cia',
        'chiamante_codice',
        'costo_intervento      (importo)'
      ];

      $interventi = $ds->select($table, $columns);

      if (!empty($interventi)) {
          foreach ($interventi as &$intervento) {
              $stabile_uuid = stabile_uuid($dd, $intervento['stabile_id']);
              $intervento['stabile_uuid'] = $stabile_uuid;
              $dd->insert('interventi', $intervento);
          }
      }
  }
