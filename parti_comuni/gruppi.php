<?php 
function gruppiCreate($ds, $dd)
{
   $dbstring = 'drop table `gruppi`;';
   echo "Creazione gruppi; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `gruppi` (
         `id` int(4) DEFAULT NULL,
         `codice` varchar(3) DEFAULT NULL,
         `descrizione` varchar(50) DEFAULT NULL,
         `totale` decimal(10,2) DEFAULT NULL,
         `num_operaz` int(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function gruppiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id, ";
   $sql.="codice, ";
   $sql.="descrizione, ";
   $sql.="totale, ";
   $sql.="num_operaz ";
   $sql.="FROM gruppi ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('gruppi', $row);
   }
}
