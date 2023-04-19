<?php

// * To mailtrap.io >> 
// array $data >> from contato.php
// $emailHost, $emailUsername, $emailPassword, $myEmail >> from CONSTANTS credentials.php >> 'MY_HOST', 'MY_USERNAME', 'MY_PASSWORD', 'MY_EMAIL'
function send(array $data, $emailHost, $emailUsername, $emailPassword, $myEmail) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'plain';
	$email->isSMTP();
	$email->Host = $emailHost;
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = $emailUsername;
	$email->Password = $emailPassword;
	$email->isHTML(true);
	$email->setFrom($myEmail);
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();

  // echo $email->ErrorInfo;
}


// ** modelo simples
	// function send($data, $myEmail) {
		//   	$to = $myEmail;
		//   	$subject = $data->subject;
		//   	$message = $data->message;
		//   	$headers = "From: {$data->email}" . "\r\n" .
		//   	'Reply-To: contato@devclass.com.br' . "\r\n" .
		//   	'X-Mailer: PHP/' . phpversion();

		//   	return mail($to, $subject, $message, $headers);
		//   }
	//
