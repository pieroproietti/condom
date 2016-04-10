<?php

function contrattiAceaCreate($ds, $dd) {
        echo "Creazione contratti_acea; \r\n";

        $dbstring = "drop table `contratti_acea`;";
        $dd->query($dbstring);

        $dbstring = "
                CREATE TABLE `contratti_acea` (
                  `id` int(11) DEFAULT NULL,
                  `id_contratto` int(11) DEFAULT NULL,
                  `codice` varchar(3) DEFAULT NULL,
                  `Descrizione` varchar(45) DEFAULT NULL,
                  `mc_agevolati` int(10) DEFAULT NULL,
                  `tariffa_agevolata` int(10) DEFAULT NULL,
                  `tariffa_agevolata_euro` int(10) DEFAULT NULL,
                  `mc_base` int(10) DEFAULT NULL,
                  `tariffa_base` int(10) DEFAULT NULL,
                  `tariffa_base_euro` int(10) DEFAULT NULL,
                  `mc_1` int(10) DEFAULT NULL,
                  `tariffa_1` int(10) DEFAULT NULL,
                  `tariffa_1_euro` int(10) DEFAULT NULL,
                  `mc_2` int(10) DEFAULT NULL,
                  `tariffa_2` int(10) DEFAULT NULL,
                  `tariffa_2_euro` int(10) DEFAULT NULL,
                  `tariffa_3` int(10) DEFAULT NULL,
                  `tariffa_3_euro` int(10) DEFAULT NULL,
                  `tariffa_depurazione` int(10) DEFAULT NULL,
                  `tariffa_depurazione_euro` int(10) DEFAULT NULL,
                  `tariffa_fognature` int(10) DEFAULT NULL,
                  `tariffa_fognature_euro` int(10) DEFAULT NULL,
                  `tipo_riga` varchar(45) DEFAULT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

                  -- ALTER TABLE `affitti` ADD PRIMARY KEY (`id`);
                  -- ALTER TABLE `affitti` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                   ";

      $dd->query($dbstring);
      echo "<br/>";
      echo $dbstring;
      echo "<br/>";
  }

  function contrattiAceaCopy($ds, $dd){
    $tableSource="contratti_acea";

    $sql="SELECT ";

    $sql.="id_contratto, ";
    $sql.="codice, ";
    $sql.="Descrizione, ";
    $sql.="mc_agevolati, ";
    $sql.="tariffa_agevolata, ";
    $sql.="tariffa_agevolata_euro, ";
    $sql.="mc_base, ";
    $sql.="tariffa_base, ";
    $sql.="tariffa_base_euro, ";
    $sql.="mc_1, ";
    $sql.="tariffa_1, ";
    $sql.="tariffa_1_euro, ";
    $sql.="mc_2, ";
    $sql.="tariffa_2, ";
    $sql.="tariffa_2_euro, ";
    $sql.="tariffa_3, ";
    $sql.="tariffa_3_euro, ";
    $sql.="tariffa_depurazione, ";
    $sql.="tariffa_depurazione_euro, ";
    $sql.="tariffa_fognature, ";
    $sql.="tariffa_fognature_euro, ";
    $sql.="tipo_riga ";
    $sql.="FROM contratti_acea ";
    $sql.="WHERE 1";

    echo "<br/>";
    echo $sql;
    echo "<br/>";

    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
      $dd->insert("contratti_acea", $row);
    }
  }

  ?>
