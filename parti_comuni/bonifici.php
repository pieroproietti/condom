<?php
/*
Cod_Stabile
Descriz_Stabile
Cod_fornitore
Descriz_fornitore
dt_esecuzione
dt_valuta
dt_creazione
descriz_operaz
Importo
Nome_file
Da_Banca_Posta
*/
function bonificiCreate($ds, $dd) {
        echo "Creazione bonifici; \r\n";

        $dbstring = "drop table `bonifici`;";
        $dd->query($dbstring);

        $dbstring = "
                CREATE TABLE `bonifici` (
                  `id` int(11) DEFAULT NULL,
                  `Cod_Stabile` int(3) DEFAULT NULL,
                  `Descriz_Stabile` varchar(50) DEFAULT NULL,
                  `Cod_fornitore` varchar(50) DEFAULT NULL,
                  `Descriz_fornitore`int(11) DEFAULT NULL,
                  `dt_esecuzione` datetime DEFAULT NULL,
                  `dt_valuta` datetime DEFAULT NULL,
                  `dt_creazione` datetime DEFAULT NULL,
                  `descriz_operaz` varchar(93) DEFAULT NULL,
                  `Importo` decimal(10,2) DEFAULT NULL,
                  `Nome_file` varchar(100) DEFAULT NULL,
                  `Da_Banca_Posta` varchar(6) DEFAULT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ";

                      $dd->query($dbstring);
                      echo "<br/>";
                      echo $dbstring;
                      echo "<br/>";
}

function bonificiCopy($ds, $dd){

  $sql ="SELECT ";
  $sql.="Cod_Stabile, ";
  $sql.="Descriz_Stabile, ";
  $sql.="Cod_fornitore, ";
  $sql.="Descriz_fornitore, ";
  $sql.="dt_esecuzione, ";
  $sql.="dt_valuta, ";
  $sql.="dt_creazione, ";
  $sql.="descriz_operaz, ";
  $sql.="Importo, ";
  $sql.="Nome_file, ";
  $sql.="Da_Banca_Posta ";
  $sql.="FROM bonifici ";
  $sql.="WHERE 1";

  echo "<br/>";
  echo $sql;
  echo "<br/>";

  $rows = $ds->query($sql, PDO::FETCH_ASSOC);
  foreach ($rows as $row) {
    $dd->insert("bonifici", $row);
  }
}
