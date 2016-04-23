<?php

function frasi_pronteCreate($ds, $dd)
{
    $dbstring = 'drop table `frasi_pronte`;';
    echo "Creazione parti_comuni/frasi_pronte; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `frasi_pronte` (
         `cod_frase` int(4) DEFAULT NULL,
         `categoria` varchar(25) DEFAULT NULL,
         `nome` varchar(50) DEFAULT NULL,
         `frase` text DEFAULT NULL,
         `tipo_riga` varchar(50) DEFAULT NULL,
         `gescon_personalizzate` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function frasi_pronteCopy($ds, $dd)
{
  echo "Importazione da access di: parti_comuni/frasi_pronte;\n\r";

    $sql = 'SELECT ';
    $sql .= 'cod_frase, ';
    $sql .= 'categoria, ';
    $sql .= 'nome, ';
    $sql .= 'frase, ';
    $sql .= 'tipo_riga, ';
    $sql .= 'gescon_personalizzate ';
    $sql .= 'FROM frasi_pronte ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('frasi_pronte', $row);
    }
}
