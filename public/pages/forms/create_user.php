<?php
require "../../../bootsstrap.php";
require "../../../app/functions/credentials.php";

if (isEmpty()) {
  flash('message', 'Preencha todos os campos!');

  return redirect("create_user");

} else { 
  echo 'OK';
}

$validate = validate([
  'name' => 's',
  'sobrenome' => 's',
  'email' => 's',
  'password' => 's',
]);

$cadastrado = create('users', $validate);

if ($cadastrado) {
  flash('message', 'Cadastrado com sucesso', 'success');

  return redirect('create_user');
}

flash('message', 'Erro ao cadastrar');
redirect('create_user');
