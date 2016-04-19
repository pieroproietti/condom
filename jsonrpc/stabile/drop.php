<?php

function dropStabile($dbc)
{
    $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);

    if ($db->connect_errno) {
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
