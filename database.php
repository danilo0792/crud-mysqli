<?php
// Executa Querys
function DBExecute($query){
$conexao = DBConnect();
$resultado = mysqli_query($conexao, $query) or die(mysqli_error());
DBClose($conexao);
return $resultado;
}