<?php

class stabile
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
        require 'drop.php';
        if (drop($dbc)) {
            return true;
        } else {
            throw new Exception('Errore: non riesco a cancellare il database: stabile');
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
