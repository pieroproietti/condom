<?php
function rate_percentualiCreate($ds, $dd)
{
   $dbstring = 'drop table `rate_percentuali`;';
   echo "Creazione rate_percentuali; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `rate_percentuali` (
         `id` int(4) DEFAULT NULL,
         `n_stra` int(2) DEFAULT NULL,
         `n_mese` varchar(2) DEFAULT NULL,
         `data_emissione` datetime DEFAULT NULL,
         `descrizione` varchar(40) DEFAULT NULL,
         `percentuale` decimal(10,2) DEFAULT NULL,
         `str_mese` int(2) DEFAULT NULL,
         `str_anno` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function rate_percentualiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id, ";
   $sql.="n_stra, ";
   $sql.="n_mese, ";
   $sql.="data_emissione, ";
   $sql.="descrizione, ";
   $sql.="percentuale, ";
   $sql.="str_mese, ";
   $sql.="str_anno ";
   $sql.="FROM rate_percentuali ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('rate_percentuali', $row);
   }
}