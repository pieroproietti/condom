<?php

function assembleeCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/assemblee; \r\n";

    $dbstring = 'drop table `assemblee`;';
    echo "Creazione assemblee; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `assemblee` (
         `num_ass` int(2) DEFAULT NULL,
         `ordin_straord` varchar(13) DEFAULT NULL,
         `dt_stampa` datetime DEFAULT NULL,
         `dt_1_convoc` datetime DEFAULT NULL,
         `ora_1_convoc` varchar(5) DEFAULT NULL,
         `luogo_1_convoc` varchar(80) DEFAULT NULL,
         `dt_2_convoc` datetime DEFAULT NULL,
         `ora_2_convoc` varchar(5) DEFAULT NULL,
         `luogo_2_convoc` varchar(80) DEFAULT NULL,
         `ordine_del_giorno` text DEFAULT NULL,
         `note_convocaz` text DEFAULT NULL,
         `note_arc` text DEFAULT NULL,
         `note_arv` text DEFAULT NULL,
         `desc_autom_1c` varchar(85) DEFAULT NULL,
         `desc_autom_2c` varchar(85) DEFAULT NULL,
         `tabella_usata` varchar(6) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function assembleeCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/assemblee; \r\n";
    $sql = 'SELECT ';
    $sql .= 'num_ass, ';
    $sql .= 'ordin_straord, ';
    $sql .= 'dt_stampa, ';
    $sql .= 'dt_1_convoc, ';
    $sql .= 'ora_1_convoc, ';
    $sql .= 'luogo_1_convoc, ';
    $sql .= 'dt_2_convoc, ';
    $sql .= 'ora_2_convoc, ';
    $sql .= 'luogo_2_convoc, ';
    $sql .= 'ordine_del_giorno, ';
    $sql .= 'note_convocaz, ';
    $sql .= 'note_arc, ';
    $sql .= 'note_arv, ';
    $sql .= 'desc_autom_1c, ';
    $sql .= 'desc_autom_2c, ';
    $sql .= 'tabella_usata ';
    $sql .= 'FROM assemblee ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('assemblee', $row);
    }
}
