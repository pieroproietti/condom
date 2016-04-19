<?php

function createStabile($dbc)
{
    $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);

    if ($db->connect_errno) {
        echo 'Errno: '.$db->connect_errno."\n";
        echo 'Error: '.$db->connect_error."\n";

        return false;
    } else {
        echo 'connessi a: '.$db->host_info."\n";
        $db->query('CREATE DATABASE IF NOT EXISTS `'.$dbc['name'].'` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;');
        $db->query('USE `'.$dbc['name'].'`;');
        $db->close();

        return true;
    }
}
