<?php

function cre_deb_precedCreate($ds, $dd)
{
  echo "Creazione di singolo_anno/cre_deb_preced; \r\n";

    $dbstring = 'drop table `cre_deb_preced`;';
    echo "Creazione cre_deb_preced; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `cre_deb_preced` (
         `id` int(4) DEFAULT NULL,
         `c_d` varchar(1) DEFAULT NULL,
         `cod_voc` varchar(3) DEFAULT NULL,
         `des_voce` varchar(90) DEFAULT NULL,
         `descrizione` varchar(60) DEFAULT NULL,
         `importo` int(4) DEFAULT NULL,
         `importo_euro` decimal(10,2) DEFAULT NULL,
         `n_stra` int(4) DEFAULT NULL,
         `incluso` varchar(1) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function cre_deb_precedCopy($ds, $dd)
{
  echo "importazione da access di: singolo_anno/cre_deb_preced; \r\n";

    $sql = 'SELECT ';
    $sql .= 'id, ';
    $sql .= 'c_d, ';
    $sql .= 'cod_voc, ';
    $sql .= 'des_voce, ';
    $sql .= 'descrizione, ';
    $sql .= 'importo, ';
    $sql .= 'importo_euro, ';
    $sql .= 'n_stra, ';
    $sql .= 'incluso ';
    $sql .= 'FROM cre_deb_preced ';
    $sql .= 'WHERE 1';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('cre_deb_preced', $row);
    }
}
