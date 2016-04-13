<?php 
function bonificiCreate($ds, $dd)
{
   $dbstring = 'drop table `bonifici`;';
   echo "Creazione bonifici; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `bonifici` (
         `cod_stabile` int(4) DEFAULT NULL,
         `descriz_stabile` varchar(50) DEFAULT NULL,
         `cod_fornitore` int(4) DEFAULT NULL,
         `descriz_fornitore` varchar(72) DEFAULT NULL,
         `dt_esecuzione` datetime DEFAULT NULL,
         `dt_valuta` datetime DEFAULT NULL,
         `dt_creazione` datetime DEFAULT NULL,
         `descriz_operaz` varchar(93) DEFAULT NULL,
         `importo` decimal(10,2) DEFAULT NULL,
         `nome_file` varchar(100) DEFAULT NULL,
         `da_banca_posta` varchar(6) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function bonificiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="cod_stabile, ";
   $sql.="descriz_stabile, ";
   $sql.="cod_fornitore, ";
   $sql.="descriz_fornitore, ";
   $sql.="dt_esecuzione, ";
   $sql.="dt_valuta, ";
   $sql.="dt_creazione, ";
   $sql.="descriz_operaz, ";
   $sql.="importo, ";
   $sql.="nome_file, ";
   $sql.="da_banca_posta ";
   $sql.="FROM bonifici ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('bonifici', $row);
   }
}
