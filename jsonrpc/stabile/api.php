<?php

class Api
{
    private $varStabile = array('id' => 0, 'uuid' => '', 'codice' => '');
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'name' => 'generale_stabile',
      ];

    public function set($parStabile)
    {
        $this->$varStabile['id'] = $parStabile['id'];
        $this->$varStabile['uuid'] = $parStabile['uuid'];
        $this->$varStabile['codice'] = $parStabile['codice'];
    }
    public function get()
    {
        return $this->varStabile;
    }
    public function drop()
    {
    }
    public function create($dbc)
    {
    }
    public function import($dbc)
    {
    }
}
