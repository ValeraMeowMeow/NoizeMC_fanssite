<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Медиа | Музыка</title>
		
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
		
		<div class="audio">
			<audio controls>
				<source src="Музыка/Выдыхай.mp3">
				<source src="Музыка/Выдыхай.ogg">
				<source src="Музыка/Выдыхай.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Выдыхай
			</p>
		</div>	
		<div class="audio">
			<audio controls>
				<source src="Музыка/Из_окна.mp3">
				<source src="Музыка/Из_окна.ogg">
				<source src="Музыка/Из_окна.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Из окна
			</p>
		</div>	
		<div class="audio">
			<audio controls>
				<source src="Музыка/Иордан.mp3">
				<source src="Музыка/Иордан.ogg">
				<source src="Музыка/Иордан.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Иордан
			</p>
		</div>	
		<div class="audio">
			<audio controls>
				<source src="Музыка/Коррозия_Хип-Хопа.mp3">
				<source src="Музыка/Коррозия_Хип-Хопа.ogg">
				<source src="Музыка/Коррозия_Хип-Хопа.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Коррозия Хип-Хопа
			</p>
		</div>	
		<div class="audio">
			<audio controls>
				<source src="Музыка/Следы_на_спине.mp3">
				<source src="Музыка/Следы_на_спине.ogg">
				<source src="Музыка/Следы_на_спине.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Следы на спине
			</p>
		</div>	
		<div class="audio">
			<audio controls>
				<source src="Музыка/Моё_море.mp3">
				<source src="Музыка/Моё_море.ogg">
				<source src="Музыка/Моё_море.wav">
				<p>Ваш браузер не поддерживает аудио</p>
			</audio>
			<p>
				Noize MC - Моё море
			</p>
		</div>	
		
		<!-- КНОПКА -->
		<div id="button-up">
			<span>Наверх</span>
		</div>
	
		<!-- ПОДВАЛ -->
		<footer class="black_block">
			<section class="right">
				<p class="text_black_block">По всем вопросам пишите на адрес lera.lobanova.01@mail.ru</p>
			</section>
			<section>
				<p class="text_black_block">©2018г. Лобанова Валерия</p>
			</section>
		</footer>
		
	</body>
	
</html>