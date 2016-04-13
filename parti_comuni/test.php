<?php
function affittiCreate($ds, $dd)
{
   $dbstring = 'drop table `affitti`;';
   echo "Creazione affitti; \r\n";
   $dd->query($dbstring);
   $dbstring = '
   `Cod_appartamento` int(2) DEFAULT NULL,
   `Cod_stabile` int(4) DEFAULT NULL,
   `Proprietario_nome` varchar(200) DEFAULT NULL,
   `Proprietario_intesta` varchar(200) DEFAULT NULL,
   `Desriz_immobile` varchar(50) DEFAULT NULL,
   `Indirizzo_immob` varchar(50) DEFAULT NULL,
   `Cap` varchar(5) DEFAULT NULL,
   `Citta` varchar(50) DEFAULT NULL,
   `Pr` varchar(2) DEFAULT NULL,
   `Nome_inquilino` varchar(50) DEFAULT NULL,
   `Rendita_catastale` dbSingle4) DEFAULT NULL,
   `Importo_fitto` decimal(8) DEFAULT NULL,
   `Particella` varchar(50) DEFAULT NULL,
   `Destinazione_d_uso` varchar(50) DEFAULT NULL,
   `Inizio_contratto` datetime8) DEFAULT NULL,
   `Ultimo_Rinnovo` datetime8) DEFAULT NULL,
   `Prossima_scadenza` datetime8) DEFAULT NULL,
   `Prossima_registrazione` datetime8) DEFAULT NULL,
   `Note` dbMemo0) DEFAULT NULL,
   `Def_ammin` varchar(50) DEFAULT NULL,
   `Descr_1_voce` varchar(50) DEFAULT NULL,
   `tipo_riga` varchar(50) DEFAULT NULL,
   `Inte_cc` varchar(100) DEFAULT NULL,
   `IBAN` varchar(27) DEFAULT NULL,
 ") ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
}

function affittiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="Cod_appartamento, ";
   $sql.="Cod_stabile, ";
   $sql.="Proprietario_nome, ";
   $sql.="Proprietario_intesta, ";
   $sql.="Desriz_immobile, ";
   $sql.="Indirizzo_immob, ";
   $sql.="Cap, ";
   $sql.="Citta, ";
   $sql.="Pr, ";
   $sql.="Nome_inquilino, ";
   $sql.="Rendita_catastale, ";
   $sql.="Importo_fitto, ";
   $sql.="Particella, ";
   $sql.="Destinazione_d_uso, ";
   $sql.="Inizio_contratto, ";
   $sql.="Ultimo_Rinnovo, ";
   $sql.="Prossima_scadenza, ";
   $sql.="Prossima_registrazione, ";
   $sql.="Note, ";
   $sql.="Def_ammin, ";
   $sql.="Descr_1_voce, ";
   $sql.="tipo_riga, ";
   $sql.="Inte_cc, ";
   $sql.="IBAN, ";
   $sql .= 'FROM affitti ';
   $sql .= 'WHERE 1';
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('affitti', $row);
   }
}
