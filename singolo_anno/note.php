<?php
namespace SingoloAnno;

function notesCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/notes; \r\n";

    $dbstring = 'drop table `notes`;';
    echo "Creazione note; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `notes` (
         `voci_di_spesa` text DEFAULT NULL,
         `prevent_ord` text DEFAULT NULL,
         `consuntivo_ord` text DEFAULT NULL,
         `prevent_ris` text DEFAULT NULL,
         `consuntivo_ris` text DEFAULT NULL,
         `confronto_ord` text DEFAULT NULL,
         `confronto_ris` text DEFAULT NULL,
         `riep_cassa_ord` text DEFAULT NULL,
         `riep_cassa_ris` text DEFAULT NULL,
         `sit_pat_ord` text DEFAULT NULL,
         `sit_pat_ris` text DEFAULT NULL,
         `estr_conto` text DEFAULT NULL,
         `durata_ec` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function notesCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/notes; \r\n";

    $sql = 'SELECT ';
    $sql .= 'voci_di_spesa, ';
    $sql .= 'prevent_ord, ';
    $sql .= 'consuntivo_ord, ';
    $sql .= 'prevent_ris, ';
    $sql .= 'consuntivo_ris, ';
    $sql .= 'confronto_ord, ';
    $sql .= 'confronto_ris, ';
    $sql .= 'riep_cassa_ord, ';
    $sql .= 'riep_cassa_ris, ';
    $sql .= 'sit_pat_ord, ';
    $sql .= 'sit_pat_ris, ';
    $sql .= 'estr_conto, ';
    $sql .= 'durata_ec ';
    $sql .= 'FROM [note] ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('note', $row);
    }
}
