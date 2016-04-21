<?php

function bonificiCrea($dd)
{
    $sql = '
CREATE TABLE `bonifici` (
    `id` int(11) DEFAULT NULL,
    `stabile_id` int(11) DEFAULT NULL,
    `stabile_uuid` varchar(36) NULL,
    `stabile_descrizione` varchar(50) DEFAULT NULL,
    `fornitore_id` int(11) DEFAULT NULL,
    `fornitore_descrizione` varchar(72) DEFAULT NULL,
    `esecuzione_del` datetime DEFAULT NULL,
    `valuta_del` datetime DEFAULT NULL,
    `creazione_del` datetime DEFAULT NULL,
    `operazione_descrizione` varchar(93) DEFAULT NULL,
    `importo` decimal(10,2) DEFAULT NULL,
    `nome_file` varchar(100) DEFAULT NULL,
    `banca_posta` varchar(6) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

    ALTER TABLE `bonifici` ADD PRIMARY KEY (`id`);
    ';
        $dd->query($sql);
}

function bonificiImporta($ds, $dd)
    {
        $table = 'bonifici';
        $columns = [
          'cod_stabile       (stabile_id)',
          'descriz_stabile   (stabile_descrizione)',
          'cod_fornitore     (fornitore_id)',
          'descriz_fornitore (fornitore_descrizione)',
          'dt_esecuzione     (esecuzione_del)',
          'dt_valuta         (valuta_del)',
          'dt_creazione      (creazione_del)',
          'descriz_operaz    (operazione_descrizione)',
          'importo',
          'nome_file',
          'da_banca_posta    (banca_posta)'
        ];

        $bonifici = $ds->select($table, $columns);
        if (!empty($bonifici)) {
            foreach ($bonifici as &$bonifico) {
                $stabile_uuid = stabile_uuid($dd, $bonifico['stabile_id']);
                $bonifico['stabile_uuid'] = $stabile_uuid;
                $dd->insert('bonifici', $bonifico);
            }
        }
    }
