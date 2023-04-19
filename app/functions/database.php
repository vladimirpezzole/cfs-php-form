<?php

use function PHPSTORM_META\sql_injection_subst;

function connect()
{
  $servername = SERVER_NAME;
  $username = USER_DB;
  $password = PWD_DB;
  $dbname = DBNAME_DB;
  $port = PORT_DB;

  $pdo = new \PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  return $pdo;
}

function create($table, $fields)
{

  if (!is_array($fields)) {
    $fields = (array) $fields;
  }

  $implode_keys=implode(', ', array_keys($fields));
  $implode_name='"' . implode('", "', array_values($fields)) . '"';
  
  $sql = "INSERT INTO {$table}";
  $sql .= "(" . $implode_keys . ")";
  $sql .= " VALUES(" . $implode_name . ")";
  
  $pdo = connect();
  
  $insert = $pdo->prepare($sql);
  
  return $insert->execute();
}

function all($table)
{

  $pdo = connect();

  $sql = "SELECT * FROM {$table}";
  $list = $pdo->query($sql);
  $list->execute();

  return $list->fetchAll();
}

function update($table, $fields, $where)
{

  if (!is_array($fields)) {
    $fields = (array) $fields;
  }

  $data = array_map(function ($field) {
    return "{$field} = :{$field}";
  }, array_keys($fields));

  $sql = "UPDATE {$table} SET ";

  $sql .= implode(',', $data);

  $sql .= " WHERE {$where[0]} = :{$where[0]}";

  $data = array_merge($fields, [$where[0] => $where[1]]);

  $pdo = connect();

  $update = $pdo->prepare($sql);

  $update->execute($data);

  return $update->rowCount();
}

function find($table, $field, $value)
{
  $pdo = connect();

  $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

  $sql = "SELECT * FROM {$table} WHERE {$field} = :{$field}";

  $find = $pdo->prepare($sql);
  $find->bindValue($field, $value);
  $find->execute();

  return $find->fetch();
}

function delete($table, $field, $value)
{
  $pdo = connect();

  $sql = "DELETE FROM {$table} WHERE {$field} = :{$field}";
  $delete = $pdo->prepare($sql);
  $delete->bindValue($field, $value);

  return $delete->execute();
}
