<?php

function votazioni_genCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/votazioni_gen; \r\n";

    $dbstring = 'drop table `votazioni_gen`;';
    echo "Creazione votazioni_gen; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `votazioni_gen` (
         `id_votazione` int(4) DEFAULT NULL,
         `num_assemblea` int(2) DEFAULT NULL,
         `descrizione` varchar(150) DEFAULT NULL,
         `tabella_usata` varchar(6) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function votazioni_genCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/votazioni_gen; \r\n";
  
    $sql = 'SELECT ';
    $sql .= 'id_votazione, ';
    $sql .= 'num_assemblea, ';
    $sql .= 'descrizione, ';
    $sql .= 'tabella_usata ';
    $sql .= 'FROM votazioni_gen ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('votazioni_gen', $row);
    }
}
