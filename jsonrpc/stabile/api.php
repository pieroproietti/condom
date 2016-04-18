<?php

class Api
{
    private $varStabile = array('id' => 0, 'uuid' => '', 'codice' => '');
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'name' => 'generale_stabile',
      ];

    public function setStabile($parStabile)
    {
        $this->$varStabile['id'] = $parStabile['id'];
        $this->$varStabile['uuid'] = $parStabile['uuid'];
        $this->$varStabile['codice'] = $parStabile['codice'];
    }
    public function getStabile()
    {
        return $this->varStabile;
    }
    public function drop()
    {
        $db = new mysqli($this->$dbc['server'], $this->$dbc['username'], $this->$dbc['password']);
        if ($db->connect_errno) {
            echo 'Il sito sta avendo problemi...\n';
            echo "Errore: connessione MySQL fallita: \n";
            echo 'Errno: '.$db->connect_errno."\n";
            echo 'Error: '.$db->connect_error."\n";

            return false;
        } else {
            echo 'connessi a: '.$db->host_info."\n";
            $db->query('DROP DATABASE `'.$dbc['name'].';');
            $db->close();

            return true;
        }
    }

    public function create($dbc)
    {
    }
    public function import($dbc)
    {
    }
}
