<?php

function estrattiContoCrea($dd)
{
    echo "Creazione condom/estratti_conto\r\n";
    $sql = '
    DROP TABLE IF EXISTS `estratti_conto`;
    CREATE TABLE `estratti_conto` (
      `id` int(11) NOT NULL,
      `stabile_id` int(11) NOT NULL,
      `stabile_uuid` varchar(36) NOT NULL,
      `protocollo` int(4) DEFAULT NULL,
      `pagamento_del` datetime DEFAULT NULL,
      `incasso_nr` int(2) DEFAULT NULL,
      `incasso_anno` varchar(10) DEFAULT NULL,
      `condomino_id` varchar(50) DEFAULT NULL,
      `scala_interno` varchar(24) DEFAULT NULL,
      `condomino_nome` varchar(50) DEFAULT NULL,
      `descrizione` varchar(150) DEFAULT NULL,
      `importo` decimal(10,2) DEFAULT NULL,
      `nome_file_pdf` varchar(50) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

      ALTER TABLE `estratti_conto` ADD PRIMARY KEY (`id`);
      ALTER TABLE `estratti_conto` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
      ';
    $dd->query($sql);
}

function estrattiContoImporta($ds, $dd,  $stabile_id, $stabile_uuid)
{
    echo "Importazione di parti_comuni/inc_da_ec in condom/estratti_conto\n\r";
    $table = 'inc_da_ec';
    $columns = [
      'protocollo',
      'data_pag                 (pagamento_del)',
      'num_incasso              (incasso_nr)',
      'anno_incasso             (incasso_anno)',
      'id_condomino             (condomino_id)',
      'sc_int                   (scala_interno)',
      'nome_condomino           (condomino_nome)',
      'descrizione_aggiuntiva   (descrizione)',
      'importo',
      'nome_file_pdf',
    ];

    $estrattiConto = $ds->select($table, $columns);
    if (!empty($estrattiConto)) {
        foreach ($estrattiConto as &$estrattoConto) {
            $estrattoConto['stabile_id'] = $stabile_id;
            $estrattoConto['stabile_uuid'] = $stabile_uuid;
            $dd->insert('estratti_conto', $estrattiConto);
        }
    }
}
