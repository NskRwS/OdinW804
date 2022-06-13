<?php
	$email = $_POST['to'];
	$name = $_POST[ 'username' ];
	$usernumber = $_POST[ 'usernumber' ];
	$question = $_POST['question' ];

	$email = htmlspecialchars($email);
	$name = htmlspecialchars($name);
	$usernumber = htmlspecialchars($usernumber);
	$question = htmlspecialchars($question);

	$email = urldecode($email);
	$name = urldecode($name);
	$usernumber = urldecode($usernumber);
	$question = urldecode($question);

	$email = trim($email);
	$name = trim($name);
	$usernumber = trim($usernumber);
	$question = trim($question);

	if (mail($email,
			"Новое письмо с сайта:",
			"Имя: ".$name."\n".
			"Телефон: ".$usernumber."\n".
			"Cообщение: ".$question."\n".
			"From: rws@ruwebsite.ru \r\n")
	)	{
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
	}
