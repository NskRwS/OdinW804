<?php

//include 'php/config.php';
$host = "mysql.hosting.nic.ru:3306";
$user = "ruw2367959_mysql";
$pass = "ftHuGh:2";
$bdname = "ruw2367959_bd";

$email = $_POST['to'];
$name = $_POST['name'];
$usernumber = $_POST['usernumber'];
$question = $_POST['question'];

if (!empty($_POST['agree'])) {
	$agree = $_POST['agree'];
} else {
	$agree = FALSE;
}

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

$conn = new mysqli($host, $user, $pass, $bdname);

$sql = "INSERT INTO `test` (`uemail`, `uname`, `utel`, `umessage`, `uagree`)
					VALUE ('$email', '$name', '$usernumber', '$question', '$agree')";

if ($conn->query($sql) === TRUE) {
	echo 'Запись в БД создана!<br>';
}

$conn->close();

if (mail(
	$email,
	"Новое письмо с сайта:",
	"Имя: " . $name . "\n" .
		"Телефон: " . $usernumber . "\n" .
		"Cообщение: " . $question . "\n" .
		"From: rws@ruwebsite.ru \r\n"
))	echo 'Ваше сообщение отправлено!<br>'; {
	//	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
}
