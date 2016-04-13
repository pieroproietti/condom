<?php
function affittiCreate($ds, $dd)
{
   $dbstring = 'drop table `affitti`;';
   echo "Creazione affitti; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `affitti` (
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
         `iban` varchar(27) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
       
   $dd->query($dbstring);
}

function affittiCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="cod_appartamento, ";
   $sql.="cod_stabile, ";
   $sql.="proprietario_nome, ";
   $sql.="proprietario_intesta, ";
   $sql.="desriz_immobile, ";
   $sql.="indirizzo_immob, ";
   $sql.="cap, ";
   $sql.="citta, ";
   $sql.="pr, ";
   $sql.="nome_inquilino, ";
   $sql.="rendita_catastale, ";
   $sql.="importo_fitto, ";
   $sql.="particella, ";
   $sql.="destinazione_d_uso, ";
   $sql.="inizio_contratto, ";
   $sql.="ultimo_rinnovo, ";
   $sql.="prossima_scadenza, ";
   $sql.="prossima_registrazione, ";
   $sql.="note, ";
   $sql.="def_ammin, ";
   $sql.="descr_1_voce, ";
   $sql.="tipo_riga, ";
   $sql.="inte_cc, ";
   $sql.="iban ";
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
