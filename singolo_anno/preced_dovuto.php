<?php
function preced_dovutoCreate($ds, $dd)
{
   $dbstring = 'drop table `preced_dovuto`;';
   echo "Creazione preced_dovuto; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `preced_dovuto` (
         `n_emissione` int(2) DEFAULT NULL,
         `n_ricevuta` int(2) DEFAULT NULL,
         `id_condomino` int(4) DEFAULT NULL,
         `cond_inq` varchar(1) DEFAULT NULL,
         `pos_riga` int(2) DEFAULT NULL,
         `rata_mese` varchar(2) DEFAULT NULL,
         `importo_l` int(4) DEFAULT NULL,
         `importo_e` decimal(10,2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function preced_dovutoCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="n_emissione, ";
   $sql.="n_ricevuta, ";
   $sql.="id_condomino, ";
   $sql.="cond_inq, ";
   $sql.="pos_riga, ";
   $sql.="rata_mese, ";
   $sql.="importo_l, ";
   $sql.="importo_e ";
   $sql.="FROM preced_dovuto ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('preced_dovuto', $row);
   }
}
