<?php

function drop($dbc)
{
    $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);

    if ($db->connect_errno) {
        echo 'Il sito sta avendo problemi...\n';
        echo "Errore: connessione MySQL fallita: \n";
        echo 'Errno: '.$db->connect_errno."\n";
        echo 'Error: '.$db->connect_error."\n";

        return false;
    } else {
        echo 'connessi a: '.$db->host_info."\n";
        $db->query('DROP DATABASE `'.$dbc['name'].';');
        $db->close();

        return true;
    }
}
