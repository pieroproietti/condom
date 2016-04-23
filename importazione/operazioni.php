<?php

function operazioniCrea($dd)
{
  echo "Creazione condom\operazioni; \r\n";

    $sql = '
CREATE TABLE `operazioni` (
  `id` int(11) DEFAULT NULL,
    `del` datetime DEFAULT NULL,
    `conto_codice` varchar(3) DEFAULT NULL,
    `descrizione` varchar(115) DEFAULT NULL,
    `natura` varchar(10) DEFAULT NULL,
    `importo` decimal(10,2) DEFAULT NULL,
    `importo_spese` decimal(10,2) DEFAULT NULL,
    `importo_entrate` decimal(10,2) DEFAULT NULL,
    `importo_crediti` decimal(10,2) DEFAULT NULL,
    `importo_debiti` decimal(10,2) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

    ALTER TABLE `operazioni` ADD PRIMARY KEY (`id`);
    ALTER TABLE `operazioni` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
    ';

    $dd->query($sql);
    //echo '<br/>'.$sql.'<br/>';
}

function operazioniImporta($ds, $dd)
{
    $table = 'operaz_ammin';
    $columns = [
      'num_operazione   (id)',
      'data_operazione  (del)',
      'conto            (conto_codice)',
      'descrizione',
      'natura',
      'importo',
      'importo_spese',
      'importo_entrate',
      'importo_crediti',
      'importo_debiti',
    ];

    $operazioni = $ds->select($table, $columns);

    if (!empty($operazioni)) {
        echo 'operazioni NOT empty';
        foreach ($operazioni as &$operazione) {
            $dd->insert('operazioni', $operazione);
        }
    } else {
        echo 'operazioni is empty!';
    }
}
