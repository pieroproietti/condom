<?php

function frasiCrea($dd)
{
  echo "Creazione condom\frasi; \r\n";

    $sql = '
CREATE TABLE `frasi` (
  `id` int(11) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `frase` text DEFAULT NULL
  -- `tipo_riga` varchar(50) DEFAULT NULL,
  -- `gescon_personalizzate` varchar(50) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
  ';
    $dd->query($sql);
}

function frasiImporta($ds, $dd)
{
    $table = 'frasi_pronte';
    $columns = [
        'cod_frase       (id)',
        'categoria',
        'nome',
        'frase'
      ];

    $frasi = $ds->select($table, $columns);

    if (!empty($frasi)) {
        foreach ($frasi as &$frase) {
            $dd->insert('frasi', $frase);
        }
    }
}
