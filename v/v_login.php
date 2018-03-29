<html><head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Мой учебный блог">
    <meta name="keywords" content="блог,учеба,вертска">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:image" content="/images/socialimage.png">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="images/icons/favicon-32x32.png">
    <link rel="alternate" hreflang="de" href="index.html?language=de">
    <link rel="alternate" hreflang="en" href="index.html?language=en">
    <link rel="alternate" hreflang="ru" href="index.html">
<link rel="stylesheet" href="../styles/main.css">
</head>
<body>
	<form method="post"   style="margin:0 auto; width:20%; border:1px solid #cfcfcf;border-radius: 5px;padding:20px;">
	<div>
		Логин<br>
		<input type="text" name="login" style="margin:0 auto;padding:5px 10px;width: 90%;border: 1px solid #cfcfcf;border-radius: 2px;">
	</div>
	<div>
		Пароль<br>
		<input type="password" name="password" style="margin:0 auto;padding:5px 10px;width: 90%;border: 1px solid #cfcfcf;border-radius: 2px;">
	</div>
	<input type="checkbox" name="remember">Запомнить<br>
	<input type="submit" value="Войти" style="margin:10px 0px;height:30px;background: #ca6a96; color:#ffffff;border: 0px;border-radius: 5px">
	
	<?= $message;?>
	
	<div><a  href="<?=$root?>">Вернуться к просмотру новостей</a></div>
</body>
</form></html>