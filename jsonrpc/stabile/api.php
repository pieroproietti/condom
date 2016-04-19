<?php

class Api
{
    private $var = ['id'=>1,'uuid'=>0,'folder_stabile'=>0];
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'password' => 'condom',
        'name' => 'generale_stabile'
      ];
      public function id($id)
      {
          $this->var['id'] = $id;
      }
      public function uuid($uuid)
      {
          $this->var['uuid'] = $uuid;
      }
      public function folder_stabile($folder_stabile)
      {
          $this->var['folder_stabile'] = $folder_stabile;
      }
    public function drop()
    {
      require "drop.php";
      dropStabile($this->dbc);
    }
    public function create()
    {
      require "create.php";
      createStabile($this->dbc);
    }
    public function import()
    {
      require "import.php";
      importStabile($dbc,$this->id,$this->uuid,$this->folder_stabile);
    }
}
