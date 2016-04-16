<?php
function temp_anteprimaCreate($ds, $dd)
{
   $dbstring = 'drop table `temp_anteprima`;';
   echo "Creazione temp_anteprima; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `temp_anteprima` (
         `nord` int(4) DEFAULT NULL,
         `codice_tiporiga` varchar(1) DEFAULT NULL,
         `codice_tabella` varchar(6) DEFAULT NULL,
         `cod` varchar(3) DEFAULT NULL,
         `descriz` varchar(90) DEFAULT NULL,
         `tabella` varchar(6) DEFAULT NULL,
         `perc_proprietario` decimal(10,2) DEFAULT NULL,
         `importo` varchar(15) DEFAULT NULL,
         `totale_di_tabella` varchar(30) DEFAULT NULL,
         `prev` int(4) DEFAULT NULL,
         `note` varchar(80) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function temp_anteprimaCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="nord, ";
   $sql.="codice_tiporiga, ";
   $sql.="codice_tabella, ";
   $sql.="cod, ";
   $sql.="descriz, ";
   $sql.="tabella, ";
   $sql.="perc_proprietario, ";
   $sql.="importo, ";
   $sql.="totale_di_tabella, ";
   $sql.="prev, ";
   $sql.="note ";
   $sql.="FROM temp_anteprima ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('temp_anteprima', $row);
   }
}