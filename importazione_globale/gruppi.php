<?php

function gruppiCrea($dd)
{
    $sql = '
      CREATE TABLE `gruppi` (
        `id` int(11) DEFAULT NULL,
        `codice` varchar(3) DEFAULT NULL,
        `descrizione` varchar(50) DEFAULT NULL,
        `totale` decimal(10,2) DEFAULT NULL,
        `num_operaz` int(2) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

      ALTER TABLE `gruppi` ADD PRIMARY KEY (`id`);
      ALTER TABLE `gruppi` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
      ';

      $dd->query($sql);
}

function gruppiImporta($ds, $dd)
{
    $table = 'gruppi';
    $columns = [
      'id',
      'codice',
      'descrizione',
      'totale',
      'num_operaz'
    ];

    $gruppi = $ds->select($table, $columns);
    if (!empty($gruppi)) {
        foreach ($gruppi as &$gruppo) {
            $dd->insert('gruppi', $gruppo);
        }
    }
}
