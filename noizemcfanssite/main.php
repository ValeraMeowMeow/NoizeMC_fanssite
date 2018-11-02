<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC</title>
		
		<!-- Подключаемые файлы -->
		<link href="Styles-горизонт.css" rel="stylesheet" type="text/css" media="all and (orientation:landscape)">
		<link href="Styles-вертикаль.css" rel="stylesheet" type="text/css" media="all and (orientation:portrait)">
		<link rel="shortcut icon" href="Файлы/Иконка.png" type="image/png"> 
		
	</head>
	
	<body class="margin_body">
	
		<!-- ВХОД -->
		<div class="position_main_login">
			<?php
    		/* Проверяем авторизован ли пользователь */
    		if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        	/* Если нет -> Вход */
			?>
        	<a href="login.php" title="Вход">
				<img src="Файлы/вход.png" title="Вход">
			</a>
			<?php
    			} else {
        	/* Если авторизован -> Выход */
			?> 
        	<a href="out.php" title="Выйти">
				<img src="Файлы/выйти.png" title="Выйти">
			</a>
			<?php
   				}
			?>
		</div>
		
		<!-- ГЛАВНАЯ -->
		<div class="position_main_noize">
			<a href="main.php" title="Фан-сайт | Noize MC">
				<img src="Файлы/NoizeMC_main.png" alt="Noize MC">
			</a>
		</div>
		
		<!-- О ГРУППЕ -->
		<div class="position_main_group">
			<a href="aboutthegroup.php" title="О группе">
				<img src="Файлы/группа.png" title="О группе">
			</a>
		</div>
		
		<!-- ГЛАВНАЯ -->
		<div class="position_main_fan">
			<a href="main.php" title="Фан-сайт | Noize MC">
				<img src="Файлы/фан-сайт.png" alt="Фан-сайт">
			</a>
		</div>
		
		<!-- НОВОСТИ -->
		<div class="position_main_news">
			<a href="news.php" title="Новости">
				<img src="Файлы/новости.png" title="Новости">
			</a>
		</div>
		
		<!-- ФОРУМ -->
		<div class="position_main_forum">
			<a href="forum.php" title="Форум">
				<img src="Файлы/форум.png" title="Форум">
			</a>
		</div>
		
		<!-- МАГАЗИН -->
		<div class="position_main_shop">
			<a href="shop.php" title="Магазин">
				<img src="Файлы/магаз.png" title="Магазин">
			</a>
		</div>
		
		<!-- АФИША -->
		<div class="position_main_poster">
			<a href="poster.php" title="Афиша">
				<img src="Файлы/афиша.png" title="Афиша">
			</a>
		</div>
		
		<!-- МЕДИА -->
		<div class="position_main_media">
			<a href="media.php" title="Медиа">
				<img src="Файлы/медиа.png" title="Медиа">
			</a>
		</div>
		
		<!-- ПОДВАЛ -->
		<footer class="black_block_main">
			<section class="right">
				<p class="text_black_block">По всем вопросам пишите на адрес lera.lobanova.01@mail.ru</p>
			</section>
			<section>
				<p class="text_black_block">©2018г. Лобанова Валерия</p>
			</section>
		</footer>
		
	</body>
	
</html>