<?php
require "../../../bootsstrap.php";
require "../../../app/functions/credentials.php";

if (isEmpty()) {
  flash('message', 'Preencha todos os campos!');

  return redirect("contato");

} else { 
  echo 'OK';
}

$validate = validate([
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's',
]);


$data = [
	'quem' => $validate->email,
	'para' => 'contato@devclass.com.br',
	'mensagem' => $validate->message,
	'assunto' => $validate->subject,
];

// *from credentials.php >> $emailHost, $emailUsername, $emailPassword,$myEmail
if (send($data, $emailHost, $emailUsername, $emailPassword,$myEmail)) {
	flash('message', 'Email enviado com sucesso', 'success');

	return redirect("contato");
}

