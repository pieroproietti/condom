<?php

function fattureCreate($ds, $dd)
{
    echo "Creazione fatture; \r\n";

    $dbstring = 'drop table `fatture`;';
    $dd->query($dbstring);

    $dbstring = '
    CREATE TABLE `fatture` (
      `id_fatture`	Long(	4) DEFAULT NULL,
      `id_stabile`	Long(	4) DEFAULT NULL,
      `Riferimento`	Long(	4) DEFAULT NULL,
      `Cod_fornitore`	Long(	4) DEFAULT NULL,
      `Data_fattura`	Date(	8) DEFAULT NULL,
      `Data_pagamento`	Date(	8) DEFAULT NULL,
      `Num_fattura`	String(	12) DEFAULT NULL,
      `Descrizione_sintetica`	String(	100) DEFAULT NULL,
      `Descriz_corpo`	String(	250) DEFAULT NULL,
      `Conteggi_A_M`	String(	1) DEFAULT NULL,
      `Onorario`	Double(	8) DEFAULT NULL,
      `Aliq_4perc`	Single(	4) DEFAULT NULL,
      `Importo_4perc`	Double(	8) DEFAULT NULL,
      `Aliq_cassa`	Single(	4) DEFAULT NULL,
      `Importo_cassa`	Double(	8) DEFAULT NULL,
      `Imponibile`	Double(	8) DEFAULT NULL,
      `Aliq_inps`	Single(	4) DEFAULT NULL,
      `Importo_inps`	Double(	8) DEFAULT NULL,
      `Aliq_iva`	Single(	4) DEFAULT NULL,
      `Importo_iva`	Double(	8) DEFAULT NULL,
      `Totale_fattura`	Double(	8) DEFAULT NULL,
      `Aliq_rda`	Single(	4) DEFAULT NULL,
      `Importo_rda`	Double(	8) DEFAULT NULL,
      `Rimborsi`	Double(	8) DEFAULT NULL,
      `Importo_netto`	Double(	8) DEFAULT NULL,
      `Prof_occas`	String(	1) DEFAULT NULL,
      `id_anno`	Long(	4) DEFAULT NULL,
      `voce_compenso`	String(	3) DEFAULT NULL,
      `voce_rda`	String(	3) DEFAULT NULL,
      `Reg_compenso`	Long(	4) DEFAULT NULL,
      `Reg_rda`	Long(	4) DEFAULT NULL,
      `reg_gestione`	String(	15) DEFAULT NULL,
      `reg_nstra`	Integer(	2) DEFAULT NULL,
      `cassa_compenso`	String(	3) DEFAULT NULL,
      `cassa_rda`	String(	3) DEFAULT NULL,
      `Rif_f24`	Long(	4) DEFAULT NULL,
      `note`	String(	80) DEFAULT NULL,
      `rif_fatt_mio`	Long(	4) DEFAULT NULL,
      `compet_compenso`	String(	1) DEFAULT NULL,
      `compet_Rda`	String(	1) DEFAULT NULL,
      `Bonifico_diretto`	Null(	8) DEFAULT NULL,
      `File_Bonifico_telematico`	String(	100) DEFAULT NULL,
      `Etic_axivar`	String(	50) DEFAULT NULL,
      `Singola_multipla`	String(	1) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';

    $dd->query($dbstring);
    echo '<br/>';
    echo $dbstring;
    echo '<br/>';
}

function fattureCopy($ds, $dd)
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
    $sql .= 'Onorario, ';
    $sql .= 'Aliq_4perc, ';
    $sql .= 'Importo_4perc, ';
    $sql .= 'Aliq_cassa, ';
    $sql .= 'Importo_cassa, ';
    $sql .= 'Imponibile, ';
    $sql .= 'Aliq_inps, ';
    $sql .= 'Importo_inps, ';
    $sql .= 'Aliq_iva, ';
    $sql .= 'Importo_iva, ';
    $sql .= 'Totale_fattura, ';
    $sql .= 'Aliq_rda, ';
    $sql .= 'Importo_rda, ';
    $sql .= 'Rimborsi, ';
    $sql .= 'Importo_netto, ';
    $sql .= 'Prof_occas, ';
    $sql .= 'id_anno, ';
    $sql .= 'voce_compenso, ';
    $sql .= 'voce_rda, ';
    $sql .= 'Reg_compenso, ';
    $sql .= 'Reg_rda, ';
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
    $sql .= 'Singola_multipla ';
    $sql .= ' FROM fatture ';
    $sql .= ' WHERE 1 ';
    echo '<br/>';
    echo $sql;
    echo '<br/>';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('fatture', $row);
      }
}
