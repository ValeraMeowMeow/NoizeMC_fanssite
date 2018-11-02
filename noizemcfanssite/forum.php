<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Общение</title>
		
		<!-- Подключаемые файлы -->
		<link href="Styles-горизонт.css" rel="stylesheet" type="text/css" media="all and (orientation:landscape)">
		<link href="Styles-вертикаль.css" rel="stylesheet" type="text/css" media="all and (orientation:portrait)">
		<link rel="shortcut icon" href="Файлы/Иконка.png" type="image/png"> 
		
		<!-- Скрипты -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#button-up').fadeIn();
				} 
				else {
				$('#button-up').fadeOut();
				}
			});
			$('#button-up').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 500);
			return false;
			});
		});
		</script>
		
	</head>

	<body class="margin_body">
	
		<!-- ГЛАВНАЯ -->
		<span class="position_noize">
			<a href="index.php" title="Фан-сайт | Noize MC">
				<img src="Файлы/NoizeMC.png" alt="Noize MC">
			</a>
		</span>
		
		<!-- МЕНЮ -->
		<header class="menu">
			<div class="button">
				<a href="poster.php" title="Фан-сайт | Noize MC | Афиша">
					<img src="Файлы/афишаМ.png" title="Афиша">
				</a>
				<a href="media.php" title="Фан-сайт | Noize MC | Медиа">
					<img src="Файлы/медиаМ.png" title="Медиа">
				</a>
				<a href="shop.php" title="Фан-сайт | Noize MC | Магазин">
					<img src="Файлы/магазМ.png" title="Магазин">
				</a>
				<a href="forum.php" title="Фан-сайт | Noize MC | Общение">
					<img src="Файлы/общениеМ.png" title="Общение">
				</a>
				<a href="news.php" title="Фан-сайт | Noize MC | Новости">
					<img src="Файлы/новостиМ.png" title="Новости">
				</a>
				<a href="aboutthegroup.php" title="Фан-сайт | Noize MC | О группе">
					<img src="Файлы/группаМ.png" title="О группе">
				</a>
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
		</header>
		
		<?php
    		/* Проверяем авторизован ли пользователь */
    		if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        	/* Если нет -> ... */
        	} else {
        	/* Если да, то возможность задавать вопросы */
		?>
		<!-- Блок - добавить вопрос -->
		<div class="forum_block_pl">
			<!-- Тема вопроса -->
			<div class="forum_title">
				<input type="text" name="title" placeholder="Тема вопроса..." required="required">
			</div>
			<!-- Вопрос -->
			<div class="forum_quest">
				<input type="text" name="content" placeholder="Вопрос..." required="required">
			</div>
			<!-- Опубликавать -->
			<span class="buy">
				<input type="submit" name="publ" value="Опубликавать">
			</span>
		</div>
		<?php
			}
		?>

		<div>
			<?php
				
    			/* имя хоста */
    			$server = "127.0.0.1:3306"; 
    			/* Имя пользователя БД */
    			$username = "root"; 
    			/* Пароль пользователя */
    			$password = ""; 
    			/* Имя базы данных */
    			$database_2 = "forum"; 
    			$link = mysql_connect($server, $username, $password);
    			mysql_select_db($database_2, $link);
     
    			$sql = mysql_query("SELECT `id`, `title`, `content` `data` FROM `forum`", $link);
    			while ($result = mysql_fetch_array($sql)) {
    		?>
    			<div class="forum_block">
    				<div class="forum_block_title">
    					<?php echo $result['title']; ?>
    				</div>
    				<div class="forum_block_data">
    					<?php echo $result['data']; ?>
    				</div>
    				<div class="forum_block_content">
    					<?php echo $result['content']; ?>
    				</div>
    			</div>
    		<?php 
    			}
			?>
		</div>

		<div class="buy">
			<a href="http://fanssite.7bb.ru" target="_blank">
				Форум
			</a>
		</div>
		
		<!-- КНОПКА -->
		<div id="button-up">
			<span>Наверх</span>
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