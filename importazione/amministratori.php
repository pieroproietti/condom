<?php

function amministratoriCrea($dd)
{
  echo "Creazione condom\amministratori;\n\r";

    $sql = '
CREATE TABLE `amministratori` (
  `id` int(11) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `indirizzo` varchar(40) DEFAULT NULL,
  `cap` varchar(5) DEFAULT NULL,
  `comune` varchar(30) DEFAULT NULL,
  `provincia` varchar(2) DEFAULT NULL,
  `partita_iva` varchar(16) DEFAULT NULL,
  `codice_fiscale` varchar(16) DEFAULT NULL,
  `intestazione` text DEFAULT NULL,
  `fornitore_id` int(4) DEFAULT NULL,
  `conto_codice` varchar(3) DEFAULT NULL,
  `indirizzo_email` varchar(150) DEFAULT NULL,
  `internet_codice_amm` varchar(5) DEFAULT NULL,
  `internet_password` varchar(50) DEFAULT NULL,
  `telefoni` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `cellulare` varchar(50) DEFAULT NULL,
  `sito_personale` varchar(100) DEFAULT NULL,
  `intestaz_sito` varchar(100) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `pt_pw` varchar(15) DEFAULT NULL,
  `orari` varchar(150) DEFAULT NULL,
  `compensi_1` varchar(100) DEFAULT NULL,
  `compensi_2` varchar(100) DEFAULT NULL,
  `compensi_3` varchar(100) DEFAULT NULL,
  `profess_non_regolam` smallint DEFAULT NULL,
  `sfondo_su_fatture` int(2) DEFAULT NULL,
  `applico_rda` varchar(2) DEFAULT NULL,
  `logo_su_fatture` int(2) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

  ALTER TABLE `amministratori` ADD PRIMARY KEY (`id`);
  ALTER TABLE `amministratori` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ';

      $dd->query($sql);
      //echo '<br/>'.$sql.'<br/>';
  }

  function amministratoriImporta($ds, $dd)
  {
      $table = 'amministratore';
      $columns = [
        'nome',
        'indirizzo',
        'cap',
        'citta          (comune)',
        'pr             (provincia)',
        'p_iva          (partita_iva)',
        'cod_fisc       (codice_fiscale)',
        'intestazione',
        'cod_fornitore  (fornitore_id)',
        'cod_cont_amm   (conto_codice)',
        'indirizzo_email',
        'internet_codice_amm',
        'internet_password',
        'telefoni',
        'fax',
        'cellulare',
        'sito_personale',
        'intestaz_sito',
        'logo',
        'pt_pw',
        'orari',
        'compensi_1',
        'compensi_2',
        'compensi_3',
        'profess_non_regolam',
        'sfondo_su_fatture',
        'applico_rda',
        'logo_su_fatture'
      ];

      $amministratori = $ds->select($table, $columns);
      if (!empty($amministratori)) {
          foreach ($amministratori as &$amministratore) {
              $dd->insert('amministratori', $amministratore);
          }
      }
  }
