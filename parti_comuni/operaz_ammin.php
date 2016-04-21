<?php

function operaz_amminCreate($ds, $dd)
{
    $dbstring = 'drop table `operaz_ammin`;';
    echo "Creazione operaz_ammin; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `operaz_ammin` (
         `num_operazione` int(4) DEFAULT NULL,
         `data_operazione` datetime DEFAULT NULL,
         `conto` varchar(3) DEFAULT NULL,
         `descrizione` varchar(115) DEFAULT NULL,
         `natura` varchar(10) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `importo_spese` decimal(10,2) DEFAULT NULL,
         `importo_entrate` decimal(10,2) DEFAULT NULL,
         `importo_crediti` decimal(10,2) DEFAULT NULL,
         `importo_debiti` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function operaz_amminCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'num_operazione, ';
    $sql .= 'data_operazione, ';
    $sql .= 'conto, ';
    $sql .= 'descrizione, ';
    $sql .= 'natura, ';
    $sql .= 'importo, ';
    $sql .= 'importo_spese, ';
    $sql .= 'importo_entrate, ';
    $sql .= 'importo_crediti, ';
    $sql .= 'importo_debiti ';
    $sql .= 'FROM operaz_ammin ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('operaz_ammin', $row);
    }
}
