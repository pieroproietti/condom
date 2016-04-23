<?php

function inc_reg_gloCreate($ds, $dd)
{
    $dbstring = 'drop table `inc_reg_glo`;';
    echo "Creazione parti_comuni/inc_reg_glo; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `inc_reg_glo` (
         `protocollo` int(4) DEFAULT NULL,
         `data_pag` datetime DEFAULT NULL,
         `cod_stab` int(2) DEFAULT NULL,
         `descr_stab` varchar(50) DEFAULT NULL,
         `num_incasso_dal` varchar(20) DEFAULT NULL,
         `num_incasso_al` varchar(20) DEFAULT NULL,
         `anno_incasso` int(4) DEFAULT NULL,
         `importo_totale` decimal(10,2) DEFAULT NULL,
         `nome_file_pdf` varchar(50) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function inc_reg_gloCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'protocollo, ';
    $sql .= 'data_pag, ';
    $sql .= 'cod_stab, ';
    $sql .= 'descr_stab, ';
    $sql .= 'num_incasso_dal, ';
    $sql .= 'num_incasso_al, ';
    $sql .= 'anno_incasso, ';
    $sql .= 'importo_totale, ';
    $sql .= 'nome_file_pdf ';
    $sql .= 'FROM inc_reg_glo ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('inc_reg_glo', $row);
    }
}
