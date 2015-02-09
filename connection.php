<?php

// Protege contra SQL injection
function DBEscape($dados){
  $conexao = DBConnect();
  if(!is_array($dados)){
    $dados = mysqli_real_escape_string($conexao, $dados);
  }else{
    $arr = $dados;
    foreach($arr as $key => $value){
      $key    =  mysqli_real_escape_string($conexao, $key);
      $value  = mysqli_real_escape_string($conexao, $value);
      $dados[$key] = $value;
    }

  }
  DBClose($conexao);
  return $dados;
}

// Função que abre a conexão com o banco de dados
function DBConnect(){
  $conexao = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
  mysqli_set_charset($conexao, DB_CHARSET) or die(mysqli_error($conexao));

  return $conexao;
}

// Função que fecha a conexão com o banco de dados
function DBClose($conexao){
  mysqli_close($conexao) or die(mysqli_error($conexao));
}

?>