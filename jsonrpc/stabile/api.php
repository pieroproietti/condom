<?php

class Api
{
    public function drop($dbc)
    {
        require 'drop.php';
        return dropStabile($dbc);
    }
    public function createDb($dbc)
    {
        require 'create_db.php';
        createDbStabile($dbc);
    }
    public function createDbStructure($dbc)
    {
        require 'create_db_structure.php';
        createdbStructureStabile($dbc);
    }
    public function importDb($param)
    {
        require 'import_db.php';
        importDbStabile($param);
    }
}
