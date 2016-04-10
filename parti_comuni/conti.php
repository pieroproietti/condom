<?php
/*
id
ID_gruppo
cod_conto
Descrizione_conto
Totale_conto
Num_operazioni
*/

function contiCreate($ds, $dd) {
        echo "Creazione conti; \r\n";

        $dbstring = "drop table `conti`;";
        $dd->query($dbstring);

        $dbstring = "
                CREATE TABLE `conti` (
                  `id` int(11) DEFAULT NULL,
                  `ID_gruppo` int(11) DEFAULT NULL,
                  `cod_conto` varchar(3) DEFAULT NULL,
                  `Descrizione_conto` varchar(50)  DEFAULT NULL,
                  `Totale_conto` decimal(10,2)  DEFAULT NULL,
                  `Num_operazioni` int(11)  DEFAULT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                   ";

      $dd->query($dbstring);
      echo "<br/>";
      echo $dbstring;
      echo "<br/>";
  }

  function contiCopy($ds, $dd){
    $tableSource="conti";

    $sql="SELECT ";
    $sql.="id, ";
    $sql.="ID_gruppo, ";
    $sql.="cod_conto, ";
    $sql.="Descrizione_conto, ";
    $sql.="Totale_conto, ";
    $sql.="Num_operazioni ";
    $sql.="FROM conti ";
    $sql.="WHERE 1";

    echo "<br/>";
    echo $sql;
    echo "<br/>";

    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
      $dd->insert("conti", $row);
    }
  }
