<?php
function affittiCreate($ds, $dd)
{
   $dbstring = 'drop table `affitti`;';
   echo "Creazione affitti; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      `cod_appartamento` int(2) DEFAULT NULL,
      `cod_stabile` int(4) DEFAULT NULL,
      `proprietario_nome` varchar(200) DEFAULT NULL,
      `proprietario_intesta` varchar(200) DEFAULT NULL,
      `desriz_immobile` varchar(50) DEFAULT NULL,
      `indirizzo_immob` varchar(50) DEFAULT NULL,
      `cap` varchar(5) DEFAULT NULL,
      `citta` varchar(50) DEFAULT NULL,
      `pr` varchar(2) DEFAULT NULL,
      `nome_inquilino` varchar(50) DEFAULT NULL,
      `rendita_catastale` decimal(10,2) DEFAULT NULL,
      `importo_fitto` decimal(10,2) DEFAULT NULL,
      `particella` varchar(50) DEFAULT NULL,
      `destinazione_d_uso` varchar(50) DEFAULT NULL,
      `inizio_contratto` datetime DEFAULT NULL,
      `ultimo_rinnovo` datetime DEFAULT NULL,
      `prossima_scadenza` datetime DEFAULT NULL,
      `prossima_registrazione` datetime DEFAULT NULL,
      `note` text DEFAULT NULL,
      `def_ammin` varchar(50) DEFAULT NULL,
      `descr_1_voce` varchar(50) DEFAULT NULL,
      `tipo_riga` varchar(50) DEFAULT NULL,
      `inte_cc` varchar(100) DEFAULT NULL,
      `iban` varchar(27) DEFAULT NULL,
 ") ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
}

function affittiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="Cod_appartamento AS cod_appartamento, ";
   $sql.="Cod_stabile AS cod_stabile, ";
   $sql.="Proprietario_nome AS proprietario_nome, ";
   $sql.="Proprietario_intesta AS proprietario_intesta, ";
   $sql.="Desriz_immobile AS desriz_immobile, ";
   $sql.="Indirizzo_immob AS indirizzo_immob, ";
   $sql.="Cap AS cap, ";
   $sql.="Citta AS citta, ";
   $sql.="Pr AS pr, ";
   $sql.="Nome_inquilino AS nome_inquilino, ";
   $sql.="Rendita_catastale AS rendita_catastale, ";
   $sql.="Importo_fitto AS importo_fitto, ";
   $sql.="Particella AS particella, ";
   $sql.="Destinazione_d_uso AS destinazione_d_uso, ";
   $sql.="Inizio_contratto AS inizio_contratto, ";
   $sql.="Ultimo_Rinnovo AS ultimo_rinnovo, ";
   $sql.="Prossima_scadenza AS prossima_scadenza, ";
   $sql.="Prossima_registrazione AS prossima_registrazione, ";
   $sql.="Note AS note, ";
   $sql.="Def_ammin AS def_ammin, ";
   $sql.="Descr_1_voce AS descr_1_voce, ";
   $sql.="tipo_riga AS tipo_riga, ";
   $sql.="Inte_cc AS inte_cc, ";
   $sql.="IBAN AS iban, ";
   $sql.="FROM affitti ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('affitti', $row);
   }
}
