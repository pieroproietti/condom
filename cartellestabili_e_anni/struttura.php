<?php 
function strutturaCreate($ds, $dd)
{
   $dbstring = 'drop table `struttura`;';
   echo "Creazione struttura; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `struttura` (
         `id` int(4) DEFAULT NULL,
         `cod_stabile` int(4) DEFAULT NULL,
         `cod_stabile_visibile` varchar(50) DEFAULT NULL,
         `descrizione_stabile` varchar(50) DEFAULT NULL,
         `descrizione_stabile_visibile` varchar(100) DEFAULT NULL,
         `cartella_stabile` varchar(50) DEFAULT NULL,
         `anno` varchar(50) DEFAULT NULL,
         `cartella_anno` varchar(50) DEFAULT NULL,
         `tipo_riga` varchar(20) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function strutturaCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id, ";
   $sql.="cod_stabile, ";
   $sql.="cod_stabile_visibile, ";
   $sql.="descrizione_stabile, ";
   $sql.="descrizione_stabile_visibile, ";
   $sql.="cartella_stabile, ";
   $sql.="anno, ";
   $sql.="cartella_anno, ";
   $sql.="tipo_riga ";
   $sql.="FROM struttura ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('struttura', $row);
   }
}
