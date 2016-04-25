<?php
namespace SingoloAnno;

function voc_speCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/voce_spe; \r\n";

    $dbstring = 'drop table `voc_spe`;';
    echo "Creazione voc_spe; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `voc_spe` (
         `id_vocspe` int(4) DEFAULT NULL,
         `cod` varchar(3) DEFAULT NULL,
         `descriz` varchar(80) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `perc_proprietario` decimal(10,2) DEFAULT NULL,
         `perc_inquilino` decimal(10,2) DEFAULT NULL,
         `imp_propr` decimal(10,2) DEFAULT NULL,
         `imp_inquil` decimal(10,2) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL,
         `preventivo` decimal(10,2) DEFAULT NULL,
         `preventivo_euro` decimal(10,2) DEFAULT NULL,
         `note` varchar(80) DEFAULT NULL,
         `consuntivo` decimal(10,2) DEFAULT NULL,
         `consuntivo_euro` decimal(10,2) DEFAULT NULL,
         `descrizione_prop_su_operaz` varchar(82) DEFAULT NULL,
         `cod_forn_prop_su_operaz` int(4) DEFAULT NULL,
         `abit_detr36` varchar(2) DEFAULT NULL,
         `fondo` varchar(2) DEFAULT NULL,
         `t_spese` decimal(10,2) DEFAULT NULL,
         `t_entrate` decimal(10,2) DEFAULT NULL,
         `t_debiti` decimal(10,2) DEFAULT NULL,
         `t_crediti` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function voc_speCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/voc_spe; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id_vocspe, ';
    $sql .= 'cod, ';
    $sql .= 'descriz, ';
    $sql .= 'tabella, ';
    $sql .= 'perc_proprietario, ';
    $sql .= 'perc_inquilino, ';
    $sql .= 'imp_propr, ';
    $sql .= 'imp_inquil, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro, ';
    $sql .= 'preventivo, ';
    $sql .= 'preventivo_euro, ';
    $sql .= 'note, ';
    $sql .= 'consuntivo, ';
    $sql .= 'consuntivo_euro, ';
    $sql .= 'descrizione_prop_su_operaz, ';
    $sql .= 'cod_forn_prop_su_operaz, ';
    $sql .= 'abit_detr36, ';
    $sql .= 'fondo, ';
    $sql .= 't_spese, ';
    $sql .= 't_entrate, ';
    $sql .= 't_debiti, ';
    $sql .= 't_crediti ';
    $sql .= 'FROM voc_spe ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('voc_spe', $row);
    }
}
