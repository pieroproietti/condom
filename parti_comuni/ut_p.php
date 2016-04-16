<?php

function ut_pCreate($ds, $dd)
{
    $dbstring = 'drop table `ut_p`;';
    echo "Creazione ut_p; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `ut_p` (
         `id_utente` int(4) DEFAULT NULL,
         `nome` varchar(50) DEFAULT NULL,
         `pw` varchar(20) DEFAULT NULL,
         `pw_chiaro` varchar(20) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function ut_pCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_utente, ';
    $sql .= 'nome, ';
    $sql .= 'pw, ';
    $sql .= 'pw_chiaro ';
    $sql .= 'FROM ut_p ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('ut_p', $row);
    }
}
