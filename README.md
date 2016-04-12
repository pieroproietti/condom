= condom

* Automat
* Elenchi_per_lettere
* generale_stabile
* posta_det
* temp_dov
* codici_comuni
* Elenco_per_assemblee
* Posta_gen
* Temporanei
* frasi
* parti_comuni
* Singolo_anno


parti_comuni->0001->generale_stabile->0001->singolo_anno
                    Elenchi_per_lettere

cartelle_stabili_e_anni->cod_stabile(cartella_stabile) (cartella_anno)

Quindi, dato uno stabile (Descrizione_stabile) da questo archivio si ottiene
la cartella stabile condom\0001\ e le cartelle anno condom\0001\0001


Per cui:
aprire cartelle_stabili_e_anni
    selezionare uno stabile
        recuperare generale_stabile
        recuperare Elenchi_per_lettere
            aprire le cartelle anno
                recuperare [anno]\singolo_anno
                recuperare scan_documenti

            movenext
        movenext
    movenext
movenext
