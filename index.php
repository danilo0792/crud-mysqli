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

// Abre Conexão
$conexao = DBConnect();

// Fecha Conexão
DBClose($conexao);

?>
</body>
</html>