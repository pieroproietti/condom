<?php
namespace SingoloAnno;

function temp_anteprimaCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/temp_anteprima; \r\n";

    $dbstring = 'drop table `temp_anteprima`;';
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `temp_anteprima` (
         `nord` int(4) DEFAULT NULL,
         `codice_tiporiga` varchar(1) DEFAULT NULL,
         `codice_tabella` varchar(6) DEFAULT NULL,
         `cod` varchar(3) DEFAULT NULL,
         `descriz` varchar(90) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `perc_proprietario` decimal(10,2) DEFAULT NULL,
         `importo` varchar(15) DEFAULT NULL,
         `totale_di_tabella` varchar(30) DEFAULT NULL,
         `prev` int(4) DEFAULT NULL,
         `note` varchar(80) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function temp_anteprimaCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/temp_anteprima; \r\n";

    $sql = 'SELECT ';
    $sql .= 'nord, ';
    $sql .= 'codice_tiporiga, ';
    $sql .= 'codice_tabella, ';
    $sql .= 'cod, ';
    $sql .= 'descriz, ';
    $sql .= 'tabella, ';
    $sql .= 'perc_proprietario, ';
    $sql .= 'importo, ';
    $sql .= 'totale_di_tabella, ';
    $sql .= 'prev, ';
    $sql .= 'note ';
    $sql .= 'FROM temp_anteprima ';
    $sql .= 'WHERE 1';

    $rows = $ds->query($sql, \PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('temp_anteprima', $row);
    }
}
