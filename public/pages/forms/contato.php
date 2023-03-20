<!-- forms/contato -->
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

// *CONSTANTS from credentials.php >> 'MY_HOST', 'MY_USERNAME', 'MY_PASSWORD', 'MY_EMAIL'
if (send($data, MY_HOST, MY_USERNAME, MY_PASSWORD, MY_EMAIL)) {
	flash('message', 'Email enviado com sucesso', 'success');

	return redirect("contato");
}

