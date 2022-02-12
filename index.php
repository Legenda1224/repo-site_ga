<head>
    <meta charset="UTF-8">
</head>


<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$error="";
if (trim($name)=="")
	$error="Введите ваше имя";
else if (trim($email)=="")
    $error="Введите ваш email";
else if (trim($message)=="")
	$error="Введите сообщение";
else if (strlen($message)<10)
	$error="Сообщение должно быть более 10 символов";
if ($error!=""){
	echo $error;
	exit;
}

$subject="=?utf-8?8?".base64_encode("Здравствуйте я скоро вам отвечу")."?=";
$headers="From: $email\r\nReply-to: $email\r\nContent-type:text/
			html;charset=utf-8\r\n";

mail("lizamelnikova1996@gmail.com",$subject,$message,$headers);
echo "<center><b>Сообщениие успешно отправлено</center>"
exit;

?>

