<?php

class Api
{
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'password' => 'condom',
        'name' => 'generale_stabile',
      ];
      private $id;
      private $uuid;
      private $folder_stabile;

      public function id($param){
        $id=$param[0];
      }
      public function uuid($param){
        $uuid=$param[0];
      }
      public function folder_stabile($param){
        $folder_stabile=$param[0];
      }
    public function view(){
      return $this->var;
    }
    public function drop()
    {
        require 'drop.php';
        return dropStabile($this->dbc);
    }
    public function createDb()
    {
        require 'create_db.php';
        createDbStabile($this->dbc);
    }
    public function createDbStructure()
    {
        require 'create_db_structure.php';
        createdbStructureStabile($this->dbc);
    }
    public function copy()
    {
        require 'copy.php';
        copyStabile($this->dbc, $this->id,$this->uuid,$this->folder_stabile);
    }
}
