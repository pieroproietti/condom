<?php

function fattMultipleDettCreate($ds, $dd)
{
    echo "Creazione fatt_multiple_dett; \r\n";

    $dbvarchar = 'drop table `fatt_multiple_dett`;';
    $dd->query($dbvarchar);

    $dbvarchar = '
        CREATE TABLE `fatt_multiple_dett` (
        `id_fatture`	int(4) DEFAULT NULL,
        `id_stabile`	int(4) DEFAULT NULL,
        `Riferimento`	int(4) DEFAULT NULL,
        `Cod_fornitore`	int(4) DEFAULT NULL,
        `Data_fattura`	Datetime DEFAULT NULL,
        `Data_pagamento`	Datetime DEFAULT NULL,
        `Num_fattura`	varchar(	12) DEFAULT NULL,
        `Descrizione_sintetica`	varchar(	100) DEFAULT NULL,
        `Descriz_corpo`	varchar(	250) DEFAULT NULL,
        `Conteggi_A_M`	varchar(	1) DEFAULT NULL,
        `Onorario_1`	decimal(	8) DEFAULT NULL,
        `Aliq_4perc_1`	int(	4) DEFAULT NULL,
        `Importo_4perc_1`	decimal(	8) DEFAULT NULL,
        `Aliq_cassa_1`	int(	4) DEFAULT NULL,
        `Importo_cassa_1`	decimal(	8) DEFAULT NULL,
        `Imponibile_1`	decimal(	8) DEFAULT NULL,
        `Aliq_iva_1`	int(	4) DEFAULT NULL,
        `Importo_iva_1`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_1`	decimal(	8) DEFAULT NULL,
        `Onorario_2`	decimal(	8) DEFAULT NULL,
        `Aliq_4perc_2`	int(	4) DEFAULT NULL,
        `Importo_4perc_2`	decimal(	8) DEFAULT NULL,
        `Aliq_cassa_2`	int(	4) DEFAULT NULL,
        `Importo_cassa_2`	decimal(	8) DEFAULT NULL,
        `Imponibile_2`	decimal(	8) DEFAULT NULL,
        `Aliq_iva_2`	int(	4) DEFAULT NULL,
        `Importo_iva_2`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_2`	decimal(	8) DEFAULT NULL,
        `Onorario_3`	decimal(	8) DEFAULT NULL,
        `Aliq_4perc_3`	int(	4) DEFAULT NULL,
        `Importo_4perc_3`	decimal(	8) DEFAULT NULL,
        `Aliq_cassa_3`	int(	4) DEFAULT NULL,
        `Importo_cassa_3`	decimal(	8) DEFAULT NULL,
        `Imponibile_3`	decimal(	8) DEFAULT NULL,
        `Aliq_iva_3`	int(	4) DEFAULT NULL,
        `Importo_iva_3`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_3`	decimal(	8) DEFAULT NULL,
        `Onorario_4`	decimal(	8) DEFAULT NULL,
        `Aliq_4perc_4`	int(	4) DEFAULT NULL,
        `Importo_4perc_4`	decimal(	8) DEFAULT NULL,
        `Aliq_cassa_4`	int(	4) DEFAULT NULL,
        `Importo_cassa_4`	decimal(	8) DEFAULT NULL,
        `Imponibile_4`	decimal(	8) DEFAULT NULL,
        `Aliq_iva_4`	int(	4) DEFAULT NULL,
        `Importo_iva_4`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_4`	decimal(	8) DEFAULT NULL,
        `Onorario_5`	decimal(	8) DEFAULT NULL,
        `Aliq_4perc_5`	int(	4) DEFAULT NULL,
        `Importo_4perc_5`	decimal(	8) DEFAULT NULL,
        `Aliq_cassa_5`	int(	4) DEFAULT NULL,
        `Importo_cassa_5`	decimal(	8) DEFAULT NULL,
        `Imponibile_5`	decimal(	8) DEFAULT NULL,
        `Aliq_iva_5`	int(	4) DEFAULT NULL,
        `Importo_iva_5`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_5`	decimal(	8) DEFAULT NULL,
        `Onorario_T`	decimal(	8) DEFAULT NULL,
        `Importo_4perc_T`	decimal(	8) DEFAULT NULL,
        `Importo_cassa_T`	decimal(	8) DEFAULT NULL,
        `Imponibile_T`	decimal(	8) DEFAULT NULL,
        `Importo_iva_T`	decimal(	8) DEFAULT NULL,
        `Totale_fattura_T`	decimal(	8) DEFAULT NULL,
        `Aliq_rda`	int(	4) DEFAULT NULL,
        `Importo_rda`	decimal(	8) DEFAULT NULL,
        `Rimborsi`	decimal(	8) DEFAULT NULL,
        `Importo_netto`	decimal(	8) DEFAULT NULL,
        `Prof_occas`	varchar(	1) DEFAULT NULL,
        `id_anno`	int(	4) DEFAULT NULL,
        `voce_compenso_1`	varchar(	3) DEFAULT NULL,
        `voce_compenso_2`	varchar(	3) DEFAULT NULL,
        `voce_compenso_3`	varchar(	3) DEFAULT NULL,
        `voce_compenso_4`	varchar(	3) DEFAULT NULL,
        `voce_compenso_5`	varchar(	3) DEFAULT NULL,
        `voce_rda`	varchar(	3) DEFAULT NULL,
        `Reg_compenso`	int(	4) DEFAULT NULL,
        `Reg_compenso_1`	int(	4) DEFAULT NULL,
        `Reg_compenso_2`	int(	4) DEFAULT NULL,
        `Reg_compenso_3`	int(	4) DEFAULT NULL,
        `Reg_compenso_4`	int(	4) DEFAULT NULL,
        `Reg_compenso_5`	int(	4) DEFAULT NULL,
        `Reg_rda_meno`	int(	4) DEFAULT NULL,
        `Reg_rda_debito`	int(	4) DEFAULT NULL,
        `reg_gestione`	varchar(	15) DEFAULT NULL,
        `reg_nstra`	Integer(	2) DEFAULT NULL,
        `cassa_compenso`	varchar(	3) DEFAULT NULL,
        `cassa_rda`	varchar(	3) DEFAULT NULL,
        `Rif_f24`	int(	4) DEFAULT NULL,
        `note`	varchar(	80) DEFAULT NULL,
        `rif_fatt_mio`	int(	4) DEFAULT NULL,
        `compet_compenso`	varchar(	1) DEFAULT NULL,
        `compet_Rda`	varchar(	1) DEFAULT NULL,
        `Bonifico_diretto`	datetime DEFAULT NULL,
        `File_Bonifico_telematico`	varchar(	100) DEFAULT NULL,
        `Etic_axivar`	varchar(	50) DEFAULT NULL,
        `Descrizione_reg_1`	varchar(	100) DEFAULT NULL,
        `Descrizione_reg_2`	varchar(	100) DEFAULT NULL,
        `Descrizione_reg_3`	varchar(	100) DEFAULT NULL,
        `Descrizione_reg_4`	varchar(	100) DEFAULT NULL,
        `Descrizione_reg_5`	varchar(	100) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ';

    $dd->query($dbvarchar);
    echo '<br/>';
    echo $dbvarchar;
    echo '<br/>';
}

function fattMultipleDettCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'id_fatture, ';
    $sql .= 'id_stabile, ';
    $sql .= 'Riferimento, ';
    $sql .= 'Cod_fornitore, ';
    $sql .= 'Data_fattura, ';
    $sql .= 'Data_pagamento, ';
    $sql .= 'Num_fattura, ';
    $sql .= 'Descrizione_sintetica, ';
    $sql .= 'Descriz_corpo, ';
    $sql .= 'Conteggi_A_M, ';
    $sql .= 'Onorario_1, ';
    $sql .= 'Aliq_4perc_1, ';
    $sql .= 'Importo_4perc_1, ';
    $sql .= 'Aliq_cassa_1, ';
    $sql .= 'Importo_cassa_1, ';
    $sql .= 'Imponibile_1, ';
    $sql .= 'Aliq_iva_1, ';
    $sql .= 'Importo_iva_1, ';
    $sql .= 'Totale_fattura_1, ';
    $sql .= 'Onorario_2, ';
    $sql .= 'Aliq_4perc_2, ';
    $sql .= 'Importo_4perc_2, ';
    $sql .= 'Aliq_cassa_2, ';
    $sql .= 'Importo_cassa_2, ';
    $sql .= 'Imponibile_2, ';
    $sql .= 'Aliq_iva_2, ';
    $sql .= 'Importo_iva_2, ';
    $sql .= 'Totale_fattura_2, ';
    $sql .= 'Onorario_3, ';
    $sql .= 'Aliq_4perc_3, ';
    $sql .= 'Importo_4perc_3, ';
    $sql .= 'Aliq_cassa_3, ';
    $sql .= 'Importo_cassa_3, ';
    $sql .= 'Imponibile_3, ';
    $sql .= 'Aliq_iva_3,';
    $sql .= 'Importo_iva_3, ';
    $sql .= 'Totale_fattura_3, ';
    $sql .= 'Onorario_4, ';
    $sql .= 'Aliq_4perc_4, ';
    $sql .= 'Importo_4perc_4, ';
    $sql .= 'Aliq_cassa_4, ';
    $sql .= 'Importo_cassa_4, ';
    $sql .= 'Imponibile_4, ';
    $sql .= 'Aliq_iva_4, ';
    $sql .= 'Importo_iva_4, ';
    $sql .= 'Totale_fattura_4, ';
    $sql .= 'Onorario_5, ';
    $sql .= 'Aliq_4perc_5, ';
    $sql .= 'Importo_4perc_5, ';
    $sql .= 'Aliq_cassa_5, ';
    $sql .= 'Importo_cassa_5, ';
    $sql .= 'Imponibile_5, ';
    $sql .= 'Aliq_iva_5, ';
    $sql .= 'Importo_iva_5, ';
    $sql .= 'Totale_fattura_5, ';
    $sql .= 'Onorario_T, ';
    $sql .= 'Importo_4perc_T, ';
    $sql .= 'Importo_cassa_T, ';
    $sql .= 'Imponibile_T, ';
    $sql .= 'Importo_iva_T, ';
    $sql .= 'Totale_fattura_T, ';
    $sql .= 'Aliq_rda, ';
    $sql .= 'Importo_rda, ';
    $sql .= 'Rimborsi, ';
    $sql .= 'Importo_netto, ';
    $sql .= 'Prof_occas, ';
    $sql .= 'id_anno, ';
    $sql .= 'voce_compenso_1, ';
    $sql .= 'voce_compenso_2, ';
    $sql .= 'voce_compenso_3, ';
    $sql .= 'voce_compenso_4, ';
    $sql .= 'voce_compenso_5, ';
    $sql .= 'voce_rda, ';
    $sql .= 'Reg_compenso, ';
    $sql .= 'Reg_compenso_1, ';
    $sql .= 'Reg_compenso_2, ';
    $sql .= 'Reg_compenso_3, ';
    $sql .= 'Reg_compenso_4, ';
    $sql .= 'Reg_compenso_5, ';
    $sql .= 'Reg_rda_meno, ';
    $sql .= 'Reg_rda_debito, ';
    $sql .= 'reg_gestione, ';
    $sql .= 'reg_nstra, ';
    $sql .= 'cassa_compenso, ';
    $sql .= 'cassa_rda, ';
    $sql .= 'Rif_f24, ';
    $sql .= 'note, ';
    $sql .= 'rif_fatt_mio, ';
    $sql .= 'compet_compenso, ';
    $sql .= 'compet_Rda, ';
    $sql .= 'Bonifico_diretto, ';
    $sql .= 'File_Bonifico_telematico, ';
    $sql .= 'Etic_axivar, ';
    $sql .= 'Descrizione_reg_1, ';
    $sql .= 'Descrizione_reg_2, ';
    $sql .= 'Descrizione_reg_3, ';
    $sql .= 'Descrizione_reg_4, ';
    $sql .= 'Descrizione_reg_5 ';
    $sql .= 'FROM fatt_multiple_dett  ';
    $sql .= 'WHERE 1 ';

    echo '<br/>';
    echo $sql;
    echo '<br/>';

    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fatt_multiple_dett', $row);
    }
}
