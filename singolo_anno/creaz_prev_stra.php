<?php
namespace SingoloAnno;

function creaz_prev_straCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/creaz_prev_stra; \r\n";

    $dbstring = 'drop table `creaz_prev_stra`;';
    echo "Creazione creaz_prev_stra; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `creaz_prev_stra` (
         `id` int(4) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `cod_spe` varchar(3) DEFAULT NULL,
         `descrizione_voce` varchar(80) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function creaz_prev_straCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/creaz_prev_stra; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'n_stra, ';
    $sql .= 'cod_spe, ';
    $sql .= 'descrizione_voce, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro ';
    $sql .= 'FROM creaz_prev_stra ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('creaz_prev_stra', $row);
    }
}
