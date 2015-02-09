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

$query = "insert into clientes (nome) values ('Danilo')";
var_dump(DBExecute($query));

?>
</body>
</html>