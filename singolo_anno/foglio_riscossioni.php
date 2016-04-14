<?php
function foglio_riscossioniCreate($ds, $dd)
{
   $dbstring = 'drop table `foglio_riscossioni`;';
   echo "Creazione foglio_riscossioni; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `foglio_riscossioni` (
         `id_cond` int(4) DEFAULT NULL,
         `cod_cond` int(2) DEFAULT NULL,
         `cod_cumulo` int(2) DEFAULT NULL,
         `scala` varchar(3) DEFAULT NULL,
         `interno` varchar(4) DEFAULT NULL,
         `cond_inquil` varchar(1) DEFAULT NULL,
         `nome_condomino` varchar(30) DEFAULT NULL,
         `col_1` int(4) DEFAULT NULL,
         `col_2` int(4) DEFAULT NULL,
         `col_3` int(4) DEFAULT NULL,
         `col_4` int(4) DEFAULT NULL,
         `col_5` int(4) DEFAULT NULL,
         `col_6` int(4) DEFAULT NULL,
         `totale` int(4) DEFAULT NULL,
         `num_ricevuta` int(4) DEFAULT NULL,
         `note` varchar(20) DEFAULT NULL,
         `tipo_riga` varchar(30) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function foglio_riscossioniCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_cond, ";
   $sql.="cod_cond, ";
   $sql.="cod_cumulo, ";
   $sql.="scala, ";
   $sql.="interno, ";
   $sql.="cond_inquil, ";
   $sql.="nome_condomino, ";
   $sql.="col_1, ";
   $sql.="col_2, ";
   $sql.="col_3, ";
   $sql.="col_4, ";
   $sql.="col_5, ";
   $sql.="col_6, ";
   $sql.="totale, ";
   $sql.="num_ricevuta, ";
   $sql.="note, ";
   $sql.="tipo_riga ";
   $sql.="FROM foglio_riscossioni ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('foglio_riscossioni', $row);
   }
}
