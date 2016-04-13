<?php
function protoc_emailCreate($ds, $dd)
{
   $dbstring = 'drop table `protoc_email`;';
   echo "Creazione protoc_email; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `protoc_email` (
         `id_corrisp` int(4) DEFAULT NULL,
         `protocollo` int(4) DEFAULT NULL,
         `tipo_documento` varchar(100) DEFAULT NULL,
         `data` datetime DEFAULT NULL,
         `forn_cond_altro` varchar(50) DEFAULT NULL,
         `codice` int(4) DEFAULT NULL,
         `destinatario` varchar(100) DEFAULT NULL,
         `indir_mittente` varchar(150) DEFAULT NULL,
         `indir_destinatario` varchar(150) DEFAULT NULL,
         `oggetto` varchar(150) DEFAULT NULL,
         `lettera_tipo_caricata` varchar(100) DEFAULT NULL,
         `note` text DEFAULT NULL,
         `alleg_1` varchar(150) DEFAULT NULL,
         `alleg_2` varchar(150) DEFAULT NULL,
         `alleg_3` varchar(150) DEFAULT NULL,
         `scala` varchar(10) DEFAULT NULL,
         `interno` varchar(10) DEFAULT NULL,
         `inviata` smallint DEFAULT NULL,
         `alleg_4` varchar(150) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function protoc_emailCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_corrisp, ";
   $sql.="protocollo, ";
   $sql.="tipo_documento, ";
   $sql.="data, ";
   $sql.="forn_cond_altro, ";
   $sql.="codice, ";
   $sql.="destinatario, ";
   $sql.="indir_mittente, ";
   $sql.="indir_destinatario, ";
   $sql.="oggetto, ";
   $sql.="lettera_tipo_caricata, ";
   $sql.="note, ";
   $sql.="alleg_1, ";
   $sql.="alleg_2, ";
   $sql.="alleg_3, ";
   $sql.="scala, ";
   $sql.="interno, ";
   $sql.="inviata, ";
   $sql.="alleg_4 ";
   $sql.="FROM protoc_email ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('protoc_email', $row);
   }
}
