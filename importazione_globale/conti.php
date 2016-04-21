<?php

function contiCrea($dd)
{
    $sql = '
CREATE TABLE `conti` (
  `id` int(11) DEFAULT NULL,
  `conto_codice` varchar(3) DEFAULT NULL,
  `gruppo_id` int(4) DEFAULT NULL,
  `descrizione_conto` varchar(50) DEFAULT NULL,
  `totale_conto` decimal(10,2) DEFAULT NULL,
  `num_operazioni` int(2) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

  ALTER TABLE `conti` ADD PRIMARY KEY (`id`);
  ALTER TABLE `conti` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ';
      $dd->query($sql);
  }

  function contiImporta($ds, $dd)
  {
      $table = 'conti';
      $columns = [
        'id',
        'cod_conto (conto_codice)',
        'id_gruppo  (gruppo_id)',
        'descrizione_conto',
        'totale_conto',
        'num_operazioni'
      ];

      $conti = $ds->select($table, $columns);

      if (!empty($conti)) {
          echo 'conti NOT empty';
          foreach ($conti as &$conto) {
              $dd->insert('conti', $conto);
          }
      } else {
          echo '$conto=empty';
      }
  }
