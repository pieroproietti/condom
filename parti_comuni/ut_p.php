<?php

function ut_pCreate($ds, $dd)
{
    $dbstring = 'drop table `ut_p`;';
    echo "Creazione parti_comuni/ut_p; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `ut_p` (
         `id_utente` int(4) DEFAULT NULL,
         `nome` varchar(50) DEFAULT NULL,
         `pw` varchar(20) DEFAULT NULL,
         `pw_chiaro` varchar(20) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function ut_pCopy($ds, $dd)
{
  echo "Importazione da access di: parti_comuni/ut_p;\n\r";

    $sql = 'SELECT ';
    $sql .= 'id_utente, ';
    $sql .= 'nome, ';
    $sql .= 'pw, ';
    $sql .= 'pw_chiaro ';
    $sql .= 'FROM ut_p ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('ut_p', $row);
    }
}
