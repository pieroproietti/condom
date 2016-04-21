<?php

function fitti_impostazCreate($ds, $dd)
{
    $dbstring = 'drop table `fitti_impostaz`;';
    echo "Creazione fitti_impostaz; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `fitti_impostaz` (
         `tipo_ccp` varchar(2) DEFAULT NULL,
         `ccp_parte_da_stampare` varchar(1) DEFAULT NULL,
         `ccp_st_intestaz_si_no` varchar(2) DEFAULT NULL,
         `ccp_sing_da_sopra` int(4) DEFAULT NULL,
         `ccp_sing_da_sx` int(4) DEFAULT NULL,
         `cc_cond_inq` varchar(12) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function fitti_impostazCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'tipo_ccp, ';
    $sql .= 'ccp_parte_da_stampare, ';
    $sql .= 'ccp_st_intestaz_si_no, ';
    $sql .= 'ccp_sing_da_sopra, ';
    $sql .= 'ccp_sing_da_sx, ';
    $sql .= 'cc_cond_inq ';
    $sql .= 'FROM fitti_impostaz ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fitti_impostaz', $row);
    }
}
