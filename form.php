<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Cinzel:900" rel="stylesheet">
	<style>
		p{
			color:#fff;
			font-size: 30px;
			text-align: center;
		}
		a{
			color: #fff;
			font-size: 26px;
		}
	</style>
	
</head>
<body style="background:url(img/bottom_bg.jpg);">


<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную

$email=$_POST['email'];
$message=$_POST['message'];

//отправим данные из формы на e-mail админа
//Задаём переменные для письма админу о новом сообщении клиента
$address = "arinakazakovak@gmail.com";
$sub = "Письмо от посетителя";
$mes = "Посетитель указал свой адрес: $email \n Содержание письма: $message";
//Отправляем письмо админу о новом сообщении
$verify = mail ($address,$sub,$mes);
//проверка отправилось ли письмо
if ($verify == 'true')
{
echo "<p>Сообщение отправлено<br /><br />
<a href=index.html >Вернуться назад </a> </p>";
}
else
{
echo "<p>Сообщение не отправлено<br /><br />
<a href=index.html >Вернуться назад </a> </p>";
}


?>

</body>
</html>