<?php
function ripartizioneCreate($ds, $dd)
{
   $dbstring = 'drop table `ripartizione`;';
   echo "Creazione ripartizione; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `ripartizione` (
         `id_cond` int(4) DEFAULT NULL,
         `cod_cond` int(2) DEFAULT NULL,
         `propr_inquil` varchar(1) DEFAULT NULL,
         `scala` varchar(3) DEFAULT NULL,
         `interno` varchar(4) DEFAULT NULL,
         `nom_cond` varchar(30) DEFAULT NULL,
         `mil_1` decimal(10,2) DEFAULT NULL,
         `imp_1` decimal(10,2) DEFAULT NULL,
         `mil_2` decimal(10,2) DEFAULT NULL,
         `imp_2` decimal(10,2) DEFAULT NULL,
         `mil_3` decimal(10,2) DEFAULT NULL,
         `imp_3` decimal(10,2) DEFAULT NULL,
         `totale_dovuto` decimal(10,2) DEFAULT NULL,
         `prima_rata` decimal(10,2) DEFAULT NULL,
         `rate_successive` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function ripartizioneCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_cond, ";
   $sql.="cod_cond, ";
   $sql.="propr_inquil, ";
   $sql.="scala, ";
   $sql.="[int] as interno, ";
   $sql.="nom_cond, ";
   $sql.="[mil_ 1] as mil_1, ";
   $sql.="[imp_ 1] as imp_1, ";
   $sql.="[mil_ 2] as mil_2, ";
   $sql.="[imp_ 2] as imp_2, ";
   $sql.="[mil_ 3] as mil3, ";
   $sql.="[imp_ 3] as imp3, ";
   $sql.="totale_dovuto, ";
   $sql.="prima_rata, ";
   $sql.="rate_successive ";
   $sql.="FROM ripartizione ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('ripartizione', $row);
   }
}
