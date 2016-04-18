<?php

class Api
{
    private $varStabile = array('id' => 0, 'uuid' => '', 'codice' => '');
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'password' => 'condom',
        'name' => 'generale_stabile',
      ];

    public function drop()
    {
        $db = new mysqli($dbc['server'], $dbc['username'], $dbc['password']);

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
        require 'create.php';
        if (!create($dbc)) {
          return true;
        } else {
            throw new Exception('Errore: non riesco a creare il database: stabile');
        }
    }
    public function define($param)
    {
        if (array_key_exists($param)) {
            $this->$varStabile['id'] = $param['id'];
            $this->$varStabile['uuid'] = $param['uuid'];
            $this->$varStabile['codice'] = $param['codice'];
            return true;
        } else {
            throw new Exception('Errore: parametro non valido '.$param);
        }
    }
    public function import()
    {
        if (!import($dbc)) {
            return true;
        } else {
            throw new Exception('Errore: non riesco ad importare il database: stabile');
        }
    }
}
