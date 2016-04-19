<?php

class Api
{
    private $dbc = [
        'server' => 'localhost',
        'username' => 'condom',
        'password' => 'condom',
        'name' => 'generale_stabile',
      ];
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
    public function copy($id, $uuid, $folder_stabile)
    {
        require 'copy.php';
        copyStabile($this->dbc, $id, $uuid, $folder_stabile);
    }
}
