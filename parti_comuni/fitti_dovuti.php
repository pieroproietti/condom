<?php
function fitti_dovutiCreate($ds, $dd)
{
   $dbstring = 'drop table `fitti_dovuti`;';
   echo "Creazione fitti_dovuti; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `fitti_dovuti` (
         `id_dovuto` int(4) DEFAULT NULL,
         `cod_appartamento` int(2) DEFAULT NULL,
         `anno` int(2) DEFAULT NULL,
         `mese` int(2) DEFAULT NULL,
         `mese_descrizione` varchar(20) DEFAULT NULL,
         `fitto` decimal(10,2) DEFAULT NULL,
         `istat_percentuale` decimal(10,2) DEFAULT NULL,
         `istat_importo` decimal(10,2) DEFAULT NULL,
         `descrizione_1` varchar(50) DEFAULT NULL,
         `descrizione_2` varchar(50) DEFAULT NULL,
         `importo_1` decimal(10,2) DEFAULT NULL,
         `importo_2` decimal(10,2) DEFAULT NULL,
         `bollo` decimal(10,2) DEFAULT NULL,
         `totale` decimal(10,2) DEFAULT NULL,
         `n_ricevuta` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function fitti_dovutiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_dovuto, ";
   $sql.="cod_appartamento, ";
   $sql.="anno, ";
   $sql.="mese, ";
   $sql.="mese_descrizione, ";
   $sql.="fitto, ";
   $sql.="istat_percentuale, ";
   $sql.="istat_importo, ";
   $sql.="descrizione_1, ";
   $sql.="descrizione_2, ";
   $sql.="importo_1, ";
   $sql.="importo_2, ";
   $sql.="bollo, ";
   $sql.="totale, ";
   $sql.="n_ricevuta ";
   $sql.="FROM fitti_dovuti ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('fitti_dovuti', $row);
   }
}
