<?php

function affittiCrea($dd)
{
    $sql = '
CREATE TABLE `affitti` (
  `id` int(11) DEFAULT NULL,
  `stabile_id` int(11) NULL,
  `stabile_uuid` varchar(36) NULL,
  `proprietario_nome` varchar(200) DEFAULT NULL,
  `proprietario_intestazione` varchar(200) DEFAULT NULL,
  `immobile_descrizione` varchar(50) DEFAULT NULL,
  `immobile_indirizzo` varchar(50) DEFAULT NULL,
  `immobile_cap` varchar(5) DEFAULT NULL,
  `immobile_comune` varchar(50) DEFAULT NULL,
  `immobile_provincia` varchar(2) DEFAULT NULL,
  `immobile_rendita_catastale` decimal(10,2) DEFAULT NULL,
  `immobile_particella` varchar(50) DEFAULT NULL,
  `immobile_destinazione_uso` varchar(50) DEFAULT NULL,
  `contratto_inquilino` varchar(50) DEFAULT NULL,
  `contratto_importo` decimal(10,2) DEFAULT NULL,
  `contratto_inizio` datetime DEFAULT NULL,
  `contratto_ultimo_rinnovo` datetime DEFAULT NULL,
  `contratto_prossima_scadenza` datetime DEFAULT NULL,
  `contratto_prossima_registrazione` datetime DEFAULT NULL,
  `contratto_annotazioni` text,
  `pagamenti_ccp` varchar(100) DEFAULT NULL,
  `pagamenti_iban` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

ALTER TABLE `affitti` ADD PRIMARY KEY (`id`),  ADD UNIQUE KEY `uuid` (`uuid`);
ALTER TABLE `affitti` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
';

    $dd->query($sql);
    echo '<br/>'.$sql.'<br/>';
}

function affittiImporta($ds, $dd)
{
    $table = 'affitti';
    $columns = [
      'cod_appartamento       (id)',
      'cod_stabile            (stabile_id)',
      //'null                   (stabile_uuid)',
      'proprietario_nome      (proprietario_nome)',
      'proprietario_intesta   (proprietario_intestazione)',
      'desriz_immobile        (immobile_descrizione)',
      'indirizzo_immob        (immobile_indirizzo)',
      'cap                    (immobile_cap)',
      'citta                  (immobile_comune)',
      'pr                     (immobile_provincia)',
      'rendita_catastale      (immobile_rendita_catastale)',
      'particella             (immobile_particella)',
      'destinazione_d_uso     (immobile_destinazione_uso)',
      'nome_inquilino         (contratto_inquilino)',
      'importo_fitto          (contratto_importo)',
      'inizio_contratto       (contratto_inizio)',
      'ultimo_rinnovo         (contratto_ultimo_rinnovo)',
      'prossima_scadenza      (contratto_prossima_scadenza)',
      'prossima_registrazione (contratto_prossima_registrazione)',
      'note                   (contratto_annotazioni)',
      'inte_cc                (pagamenti_ccp)',
      'iban                   (pagamenti_iban)',
    ];

    $affitti = $ds->select($table, $columns);

    if (!empty($affitti)) {
        echo 'affitti NOT empty';
        foreach ($affitti as &$affitto) {
            echo '<br/>';
            print_r($affitto);
            echo 'stabile_id='.$affitto['stabile_id'].'<br/>';
            $stabile_uuid = stabile_uuid($dd, $affitto['stabile_id']);
            $affitto['stabile_uuid'] = $stabile_uuid;
            $dd->insert('affitti', $affitto);
        }
    } else {
        echo '$affitti=empty';
    }
}

function stabile_uuid($db, $id)
{
    $sql = "SELECT uuid FROM stabili WHERE id=$id";
    $rows = $db->query($sql)->fetchAll();
    echo $sql.'<br/>';
    foreach ($rows as $row) {
        $retval = $row['uuid'];
    }
    echo $retval;

    return $retval;
}
