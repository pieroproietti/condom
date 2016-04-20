<?php

function importStabile(  $param=['id'=>7,'uuid'=>'75489a66-0a48-4f90-a543-f9561f5d9215','folder_stabile'=>'0007'])
{
  require "drop_db.php";
  require "create_db.php";
  require "create_db_structure.php";
  require "import_db.php";
  $dbc = [
      'server' => 'localhost',
      'username' => 'condom',
      'password' => 'condom',
      'name' => 'generale_stabile'
    ];

  echo "<h1>Test locale</h1>";

  echo '<br/>Stabile: <b>drop </b><br/>'."\n";
  $result = dropDbStabile($dbc);
  echo "\$result:";
  var_dump($result);

  echo '<br/>Stabile: <b>createDb </b><br/>'."\n";
  $result = createDbStabile($dbc);
  echo "\$result:";
  var_dump($result);

  echo '<br/>Stabile: <b>createDbStructure </b><br/>'."\n";
  $result =createDbStructureStabile($dbc);
  echo "\$result:";
  var_dump($result);

  echo '<br/>Stabile: <b>importDb </b><br/>'."\n";
  $dbc_param=array_merge($dbc,$param);
  echo "\$param: ";
  print_r($dbc_param);
  echo '<br/>';

  $result=importDbStabile($dbc_param);
  echo "\$result:";
  var_dump($result);
  echo '<br/>';
}
?>
