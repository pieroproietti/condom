<?php
function fraz_dettCreate($ds, $dd)
{
   $dbstring = 'drop table `fraz_dett`;';
   echo "Creazione fraz_dett; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `fraz_dett` (
         `rif_progressivo` int(2) DEFAULT NULL,
         `cod_voce` varchar(3) DEFAULT NULL,
         `parte` decimal(10,2) DEFAULT NULL,
         `importo_parte` decimal(10,2) DEFAULT NULL,
         `spe_parte` decimal(10,2) DEFAULT NULL,
         `ent_parte` decimal(10,2) DEFAULT NULL,
         `deb_parte` decimal(10,2) DEFAULT NULL,
         `cre_parte` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function fraz_dettCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="rif_progressivo, ";
   $sql.="cod_voce, ";
   $sql.="parte, ";
   $sql.="importo_parte, ";
   $sql.="spe_parte, ";
   $sql.="ent_parte, ";
   $sql.="deb_parte, ";
   $sql.="cre_parte ";
   $sql.="FROM fraz_dett ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('fraz_dett', $row);
   }
}
