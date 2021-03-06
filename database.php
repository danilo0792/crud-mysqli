<?php
// Executa Querys
function DBExecute($query){
  $conexao = DBConnect();
  $resultado = mysqli_query($conexao, $query) or die(mysqli_error());
  DBClose($conexao);
  return $resultado;
}

// Grava registros
function DBCreate($table, array $data){
  $data = DBEscape($data);
  $fields = implode(',', array_keys($data));
  $values = "'".implode("','", $data)."'";
  $query = "insert into {$table}({$fields}) values ({$values})";
  return DBExecute($query);
}

// Ler Registros
function DBRead($table, $params = null, $fields = '*'){
  $params = $params ? $params = " {$params}" : null;
  $query = "select {$fields} from {$table}{$params}";
  $resultado = DBExecute($query);
  $clientes = array();

  if (!mysqli_num_rows($resultado)) {
    return false;
  }else{
    while($cliente = mysqli_fetch_assoc($resultado)){
      array_push($clientes, $cliente);
    }
    return $clientes;
  }
}

// Atualiza Registros
function DBUpdate($table, array $data, $where = null){
  foreach($data as $key => $value){
    $fields[] = "{$key} = '{$value}'";
  }

  $fields = implode(', ', $fields);

  $where = $where ? $where = " where {$where}" : null;

  $query = "Update {$table} set {$fields}{$where}";
  return DBExecute($query);
}

// Delete Registros
function DBDelete($table, $where = null){
  $where = $where ? $where = " where {$where}" : null;
  $query = "Delete from {$table} {$where}";
  return DBExecute($query);
}