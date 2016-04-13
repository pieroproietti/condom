<?php 
function anniCreate($ds, $dd)
{
   $dbstring = 'drop table `anni`;';
   echo "Creazione anni; \r\n";
   $dd->query($dbstring);
   $dbstring = '
      CREATE TABLE `anni` (
         `id_anno` int(4) DEFAULT NULL,
         `anno_o` varchar(9) DEFAULT NULL,
         `anno_r` varchar(9) DEFAULT NULL,
         `nome_dir` varchar(4) DEFAULT NULL,
         `selez` varchar(1) DEFAULT NULL,
         `descr_selez` varchar(50) DEFAULT NULL,
         `ordinarie_dal` datetime DEFAULT NULL,
         `ordinarie_al` datetime DEFAULT NULL,
         `riscald_dal` datetime DEFAULT NULL,
         `riscald_al` datetime DEFAULT NULL,
         `ft_descriz_1` varchar(100) DEFAULT NULL,
         `ft_descriz_2` varchar(100) DEFAULT NULL,
         `ft_descriz_3` varchar(100) DEFAULT NULL,
         `ft_descriz_4` varchar(100) DEFAULT NULL,
         `ft_descriz_5` varchar(100) DEFAULT NULL,
         `ft_descriz_6` varchar(100) DEFAULT NULL,
         `ft_descriz_7` varchar(100) DEFAULT NULL,
         `ft_descriz_8` varchar(100) DEFAULT NULL,
         `ft_descriz_9` varchar(100) DEFAULT NULL,
         `ft_descriz_10` varchar(100) DEFAULT NULL,
         `ft_descriz_11` varchar(100) DEFAULT NULL,
         `ft_descriz_12` varchar(100) DEFAULT NULL,
         `ft_importo_1` decimal(10,2) DEFAULT NULL,
         `ft_importo_2` decimal(10,2) DEFAULT NULL,
         `ft_importo_3` decimal(10,2) DEFAULT NULL,
         `ft_importo_4` decimal(10,2) DEFAULT NULL,
         `ft_importo_5` decimal(10,2) DEFAULT NULL,
         `ft_importo_6` decimal(10,2) DEFAULT NULL,
         `ft_importo_7` decimal(10,2) DEFAULT NULL,
         `ft_importo_8` decimal(10,2) DEFAULT NULL,
         `ft_importo_9` decimal(10,2) DEFAULT NULL,
         `ft_importo_10` decimal(10,2) DEFAULT NULL,
         `ft_importo_11` decimal(10,2) DEFAULT NULL,
         `ft_importo_12` decimal(10,2) DEFAULT NULL,
         `ft_num_1` varchar(20) DEFAULT NULL,
         `ft_num_2` varchar(20) DEFAULT NULL,
         `ft_num_3` varchar(20) DEFAULT NULL,
         `ft_num_4` varchar(20) DEFAULT NULL,
         `ft_num_5` varchar(20) DEFAULT NULL,
         `ft_num_6` varchar(20) DEFAULT NULL,
         `ft_num_7` varchar(20) DEFAULT NULL,
         `ft_num_8` varchar(20) DEFAULT NULL,
         `ft_num_9` varchar(20) DEFAULT NULL,
         `ft_num_10` varchar(20) DEFAULT NULL,
         `ft_num_11` varchar(20) DEFAULT NULL,
         `ft_num_12` varchar(20) DEFAULT NULL,
         `ft_voce_compenso` varchar(3) DEFAULT NULL,
         `ft_voce_iva` varchar(3) DEFAULT NULL,
         `ft_voce_rda` varchar(3) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
   $dd->query($dbstring);
   echo '<br/>';
   echo $dbstring;
   echo '<br/>';
}

function anniCopy($ds, $dd)
{
   $sql="SELECT ";
   $sql.="id_anno, ";
   $sql.="anno_o, ";
   $sql.="anno_r, ";
   $sql.="nome_dir, ";
   $sql.="selez, ";
   $sql.="descr_selez, ";
   $sql.="ordinarie_dal, ";
   $sql.="ordinarie_al, ";
   $sql.="riscald_dal, ";
   $sql.="riscald_al, ";
   $sql.="ft_descriz_1, ";
   $sql.="ft_descriz_2, ";
   $sql.="ft_descriz_3, ";
   $sql.="ft_descriz_4, ";
   $sql.="ft_descriz_5, ";
   $sql.="ft_descriz_6, ";
   $sql.="ft_descriz_7, ";
   $sql.="ft_descriz_8, ";
   $sql.="ft_descriz_9, ";
   $sql.="ft_descriz_10, ";
   $sql.="ft_descriz_11, ";
   $sql.="ft_descriz_12, ";
   $sql.="ft_importo_1, ";
   $sql.="ft_importo_2, ";
   $sql.="ft_importo_3, ";
   $sql.="ft_importo_4, ";
   $sql.="ft_importo_5, ";
   $sql.="ft_importo_6, ";
   $sql.="ft_importo_7, ";
   $sql.="ft_importo_8, ";
   $sql.="ft_importo_9, ";
   $sql.="ft_importo_10, ";
   $sql.="ft_importo_11, ";
   $sql.="ft_importo_12, ";
   $sql.="ft_num_1, ";
   $sql.="ft_num_2, ";
   $sql.="ft_num_3, ";
   $sql.="ft_num_4, ";
   $sql.="ft_num_5, ";
   $sql.="ft_num_6, ";
   $sql.="ft_num_7, ";
   $sql.="ft_num_8, ";
   $sql.="ft_num_9, ";
   $sql.="ft_num_10, ";
   $sql.="ft_num_11, ";
   $sql.="ft_num_12, ";
   $sql.="ft_voce_compenso, ";
   $sql.="ft_voce_iva, ";
   $sql.="ft_voce_rda ";
   $sql.="FROM anni ";
   $sql.="WHERE 1";
   echo '<br/>';
   echo $sql;
   echo '<br/>';
   $rows = $ds->query($sql, PDO::FETCH_ASSOC);
   foreach ($rows as $row) {
      $dd->insert('anni', $row);
   }
}
