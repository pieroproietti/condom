<?php

class Api
{
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'password' => 'condom',
        'name' => 'generale_stabile',
      ];
    private $var=[];
    public function id($id){
      $var['id']=$id;
    }
    public function uuid($uuid){
      $var['uuid']=$uuid;
    }
    public function folder_stabile($folder_stabile){
      $var['folder_stabile']=$folder_stabile;
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
        require 'create_copy.php';
        copyStabile($this->dbc,
                    $this->id,
                    $this->uuid,
                    $this->folder_stabile);
    }
}
