<?php
function rubricaCreate($ds, $dd)
{
   $dbstring = 'drop table `rubrica`;';
   echo "Creazione rubrica; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `rubrica` (
         `id` int(4) DEFAULT NULL,
         `nome` varchar(50) DEFAULT NULL,
         `indirizzo` varchar(50) DEFAULT NULL,
         `cap` varchar(5) DEFAULT NULL,
         `citta` varchar(50) DEFAULT NULL,
         `pr` varchar(2) DEFAULT NULL,
         `cod_fisc` varchar(16) DEFAULT NULL,
         `part_iva` varchar(11) DEFAULT NULL,
         `ubicaz_1` varchar(50) DEFAULT NULL,
         `ubicaz_2` varchar(50) DEFAULT NULL,
         `ubicaz_3` varchar(50) DEFAULT NULL,
         `ubicaz_4` varchar(50) DEFAULT NULL,
         `ubicaz_5` varchar(50) DEFAULT NULL,
         `tel_1` varchar(20) DEFAULT NULL,
         `tel_2` varchar(20) DEFAULT NULL,
         `tel_3` varchar(20) DEFAULT NULL,
         `tel_4` varchar(20) DEFAULT NULL,
         `tel_5` varchar(20) DEFAULT NULL,
         `note` text DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function rubricaCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id, ";
   $sql.="nome, ";
   $sql.="indirizzo, ";
   $sql.="cap, ";
   $sql.="citta, ";
   $sql.="pr, ";
   $sql.="cod_fisc, ";
   $sql.="part_iva, ";
   $sql.="ubicaz_1, ";
   $sql.="ubicaz_2, ";
   $sql.="ubicaz_3, ";
   $sql.="ubicaz_4, ";
   $sql.="ubicaz_5, ";
   $sql.="tel_1, ";
   $sql.="tel_2, ";
   $sql.="tel_3, ";
   $sql.="tel_4, ";
   $sql.="tel_5, ";
   $sql.="note ";
   $sql.="FROM rubrica ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('rubrica', $row);
   }
}
