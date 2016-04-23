<?php

function interventiCreate($ds, $dd)
{
    $dbstring = 'drop table `interventi`;';
    echo "Creazione parti_comuni/interventi; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `interventi` (
         `id_intervento` int(4) DEFAULT NULL,
         `cod_intervento` int(4) DEFAULT NULL,
         `segnal_data` datetime DEFAULT NULL,
         `segnal_cod_sta` int(2) DEFAULT NULL,
         `denomin_stabile` varchar(80) DEFAULT NULL,
         `oggetto` varchar(250) DEFAULT NULL,
         `comunicato_da` varchar(100) DEFAULT NULL,
         `chiam_tecnico_dt1` datetime DEFAULT NULL,
         `chiam_tecnico_dt2` datetime DEFAULT NULL,
         `chiam_tecnico_descr1` varchar(100) DEFAULT NULL,
         `chiam_tecnico_descr2` varchar(100) DEFAULT NULL,
         `interv_dt1` datetime DEFAULT NULL,
         `interv_dt2` datetime DEFAULT NULL,
         `interv_descr1` varchar(100) DEFAULT NULL,
         `interv_descr2` varchar(100) DEFAULT NULL,
         `risolto` varchar(2) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL,
         `cod_fornitore` int(4) DEFAULT NULL,
         `segnal_ora` varchar(5) DEFAULT NULL,
         `chiamante_cia` varchar(10) DEFAULT NULL,
         `chiamante_codice` int(4) DEFAULT NULL,
         `costo_intervento` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function interventiCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_intervento, ';
    $sql .= 'cod_intervento, ';
    $sql .= 'segnal_data, ';
    $sql .= 'segnal_cod_sta, ';
    $sql .= 'denomin_stabile, ';
    $sql .= 'oggetto, ';
    $sql .= 'comunicato_da, ';
    $sql .= 'chiam_tecnico_dt1, ';
    $sql .= 'chiam_tecnico_dt2, ';
    $sql .= 'chiam_tecnico_descr1, ';
    $sql .= 'chiam_tecnico_descr2, ';
    $sql .= 'interv_dt1, ';
    $sql .= 'interv_dt2, ';
    $sql .= 'interv_descr1, ';
    $sql .= 'interv_descr2, ';
    $sql .= 'risolto, ';
    $sql .= 'note, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'cod_fornitore, ';
    $sql .= 'segnal_ora, ';
    $sql .= 'chiamante_cia, ';
    $sql .= 'chiamante_codice, ';
    $sql .= 'costo_intervento ';
    $sql .= 'FROM interventi ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('interventi', $row);
    }
}
