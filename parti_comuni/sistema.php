<?php

function sistemaCreate($ds, $dd)
{
    $dbstring = 'drop table `sistema`;';
    echo "Creazione sistema; \r\n";
    $dd->query($dbstring);
    $dbstring = '
      CREATE TABLE `sistema` (
         `acqua` varchar(1) DEFAULT NULL,
         `licenza_num` varchar(50) DEFAULT NULL,
         `licenza_nome` varchar(50) DEFAULT NULL,
         `dt_registraz_acqua` varchar(10) DEFAULT NULL,
         `codice_abilitazione` varchar(50) DEFAULT NULL,
         `dt_registraz_gescon` varchar(10) DEFAULT NULL,
         `codice_abilitazione_gescon` varchar(50) DEFAULT NULL,
         `dt_registraz_rda` varchar(10) DEFAULT NULL,
         `codice_abilitazione_rda` varchar(50) DEFAULT NULL,
         `data_installazione` datetime DEFAULT NULL,
         `aperture` int(4) DEFAULT NULL,
         `logo` varchar(200) DEFAULT NULL,
         `nma` int(2) DEFAULT NULL,
         `f24_modello_abit` int(2) DEFAULT NULL,
         `ind_mail_per_sms_fax` varchar(100) DEFAULT NULL,
         `indirzzo_e_mail_sender` varchar(100) DEFAULT NULL,
         `server_smtp` varchar(100) DEFAULT NULL,
         `porta_comunicazione` int(4) DEFAULT NULL,
         `password` varchar(50) DEFAULT NULL,
         `modalita_invio_mail` varchar(1) DEFAULT NULL,
         `dt_ult_copia` datetime DEFAULT NULL,
         `dt_ult_organizza` datetime DEFAULT NULL,
         `organizza_controlla_64bit` smallint DEFAULT NULL,
         `f24_st_chiaro_scuro` int(2) DEFAULT NULL,
         `f24_st_nome_f_telem` varchar(2) DEFAULT NULL,
         `filtri_scad_stab` varchar(5) DEFAULT NULL,
         `filtri_scad_dal` datetime DEFAULT NULL,
         `filtri_scad_al` datetime DEFAULT NULL,
         `filtri_scad_emisrate` varchar(2) DEFAULT NULL,
         `filtri_scad_ass` varchar(2) DEFAULT NULL,
         `filtri_scad_f24` varchar(2) DEFAULT NULL,
         `filtri_scad_altre` varchar(2) DEFAULT NULL,
         `filtri_scad_fatte` int(2) DEFAULT NULL,
         `filtri_interv_stabile` varchar(5) DEFAULT NULL,
         `filtri_interv_fornitore` int(2) DEFAULT NULL,
         `filtri_interv_dal` datetime DEFAULT NULL,
         `filtri_interv_al` datetime DEFAULT NULL,
         `filtri_interv_ordin` int(2) DEFAULT NULL,
         `filtri_interv_fatte` int(2) DEFAULT NULL,
         `agg_utilizzo_forn` datetime DEFAULT NULL,
         `agg_scad_f24` datetime DEFAULT NULL,
         `contrasto_770` varchar(1) DEFAULT NULL,
         `filtri_forn_u` varchar(2) DEFAULT NULL,
         `filtri_forn_i` varchar(2) DEFAULT NULL,
         `filtri_forn_m` varchar(2) DEFAULT NULL,
         `percorso_invio_mail` int(2) DEFAULT NULL,
         `cu_dest_852` varchar(2) DEFAULT NULL
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';
    $dd->query($dbstring);
}

function sistemaCopy($ds, $dd)
{
    $sql = 'SELECT ';
    $sql .= 'acqua, ';
    $sql .= 'licenza_num, ';
    $sql .= 'licenza_nome, ';
    $sql .= 'dt_registraz_acqua, ';
    $sql .= 'codice_abilitazione, ';
    $sql .= 'dt_registraz_gescon, ';
    $sql .= 'codice_abilitazione_gescon, ';
    $sql .= 'dt_registraz_rda, ';
    $sql .= 'codice_abilitazione_rda, ';
    $sql .= 'data_installazione, ';
    $sql .= 'aperture, ';
    $sql .= 'logo, ';
    $sql .= 'nma, ';
    $sql .= 'f24_modello_abit, ';
    $sql .= 'ind_mail_per_sms_fax, ';
    $sql .= 'indirzzo_e_mail_sender, ';
    $sql .= 'server_smtp, ';
    $sql .= 'porta_comunicazione, ';
    $sql .= 'password, ';
    $sql .= 'modalita_invio_mail, ';
    $sql .= 'dt_ult_copia, ';
    $sql .= 'dt_ult_organizza, ';
    $sql .= 'organizza_controlla_64bit, ';
    $sql .= 'f24_st_chiaro_scuro, ';
    $sql .= 'f24_st_nome_f_telem, ';
    $sql .= 'filtri_scad_stab, ';
    $sql .= 'filtri_scad_dal, ';
    $sql .= 'filtri_scad_al, ';
    $sql .= 'filtri_scad_emisrate, ';
    $sql .= 'filtri_scad_ass, ';
    $sql .= 'filtri_scad_f24, ';
    $sql .= 'filtri_scad_altre, ';
    $sql .= 'filtri_scad_fatte, ';
    $sql .= 'filtri_interv_stabile, ';
    $sql .= 'filtri_interv_fornitore, ';
    $sql .= 'filtri_interv_dal, ';
    $sql .= 'filtri_interv_al, ';
    $sql .= 'filtri_interv_ordin, ';
    $sql .= 'filtri_interv_fatte, ';
    $sql .= 'agg_utilizzo_forn, ';
    $sql .= 'agg_scad_f24, ';
    $sql .= 'contrasto_770, ';
    $sql .= 'filtri_forn_u, ';
    $sql .= 'filtri_forn_i, ';
    $sql .= 'filtri_forn_m, ';
    $sql .= 'percorso_invio_mail, ';
    $sql .= 'cu_dest_852 ';
    $sql .= 'FROM sistema ';
    $sql .= 'WHERE 1';
    $rows = $ds->query($sql, PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $dd->insert('sistema', $row);
    }
}
