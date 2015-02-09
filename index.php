<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Aulas</title>
</head>
<body>
<?php
require_once('config.php');
require_once('connection.php');
require_once('database.php');

// $cliente = array(
//   'nome'    => 'Danilo',
//   'email'   => 'danilo_sp06@hotmail.com',
//   'idade'   => 22,
//   'status'  => 1
//   );
// $grava = DBCreate('clientes',$cliente);
// $clientes = DBRead('clientes', null, 'nome,email');

$cliente = array(
  'nome' => "João"
  );
var_dump(DBUpdate('clientes', $cliente, 'id = 2'));


?>
</body>
</html>