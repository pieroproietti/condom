<?php

function utentiCreate($ds, $dd)
{
    $dbstring = 'drop table `utenti`;';
    echo "Creazione utenti; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `utenti` (
         `id_pc` int(4) DEFAULT NULL,
         `nome_utente_del_pc` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function utentiCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_pc, ';
    $sql .= 'nome_utente_del_pc ';
    $sql .= 'FROM utenti ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('utenti', $row);
    }
}
