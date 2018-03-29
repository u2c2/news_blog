<head>
    <title>Blog test</title>
    <meta charset="UTF-8">
    <meta name="description" content="Мой учебный блог">
    <meta name="keywords" content="блог,учеба,вертска">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:image" content="../images/socialimage.png">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="../images/icons/favicon-32x32.png">
    <link rel="alternate" hreflang="de" href="index.html?language=de">
    <link rel="alternate" hreflang="en" href="index.html?language=en">
    <link rel="alternate" hreflang="ru" href="index.html">
<link rel="stylesheet" href="../styles/main.css">
</head>
<body>
	<div class="article-holder">
	<form class="form" method="post" style="margin:0 auto;width:70%; border:1px solid #cfcfcf;border-radius: 5px;padding:20px;">
		<div>
			<span class="form-title" style="display:block;">Заголовок</span>
			<input type="text" name="title" value="<?=$fields['title']; ?>" style="padding:5px 10px;width:90%;border: 1px solid #cfcfcf;border-radius: 2px;">
		</div>
		<div>
			<span class="form-article" style="display:block;">Статья</span>
			<textarea name="article" style="display:block;width:96%;height:200px;border: 1px solid #cfcfcf;border-radius: 3px;"><?=$fields['article'];?></textarea>
		</div>
		<button style="margin:10px 0px;height:30px;background: #ca6a96; color:#ffffff;border: 0px;border-radius: 5px";>Добавить статью</button>
	
	<? foreach($erorrs as $err): ?>
<p>	<?=$err; ?></p>
<? endforeach?>
</form>
</div>
</body>
	