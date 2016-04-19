<?php

class Api
{
    private $varStabile = array('id' => 0, 'uuid' => '', 'codice' => '');
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'name' => 'generale_stabile',
      ];

    public function let($parameters)
    {
        $this->$varStabile['id'] = $paramenters['id'];
        $this->$varStabile['uuid'] = $paramenters['uuid'];
        $this->$varStabile['codice'] = $paramenters['codice'];
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
