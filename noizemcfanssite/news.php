<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Новости</title>
		
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
		
		<!-- НОВОСТИ -->
		<div class="galsss">
			<span class="block_gal">
				<img src="Файлы/новость1.png" title="Программа “Правила жизни”">
				<span class="gals_text1_1">
					Noize MC в программе “Правила жизни” на телеканале “Культура”
				</span>
				<span class="gals_text2">
					18.09.2018
				</span>
			</span>
			<span class="gals_block">
				<span class="gal">
					<iframe width="750" height="450" src="https://www.youtube.com/embed/dk4Rj9yOx1k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</span>
			</span>
		</div>

		<div class="galsss">
			<span class="block_gal">
				<img src="Файлы/новость2.png" title="Программа “Агора” с Михаилом Швыдким">
				<span class="gals_text1_1">
					Noize MC на телеканале “Культура” в программе “Агора” с Михаилом Швыдким
				</span>
				<span class="gals_text2">
					08.09.2018
				</span>
			</span>
			<span class="gals_block">
				<span class="gal">
					<iframe width="750" height="480" src="https://www.youtube.com/embed/OOpG6WuHsQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</span>
			</span>
		</div>

		<div class="galsss">
			<span class="block_gal">
				<span class="gals_text1_1">
					Премьера сингла “Следы на спине”
				</span>
				<span class="gals_text2">
					07.09.2018
				</span>
				<span class="gals_text3">
					Noize MC: “Одиноки ли мы во Вселенной, до сих пор неизвестно. Зато доподлинно известно, что чувство одиночества порой посещает даже тех из нас, кто, казалось бы, нашёл свою любовь, создал семью и окружён настоящими, верными друзьями. В такие моменты мы открываем себя с новой, неизведанной стороны и вступаем в контакт с непознанным. Нашим близким бывает сложно принять последствия этого опыта, и подчас спасти ситуацию может только непоколебимая вера. I want to believe!”
				</span>
			</span>
			<span class="gals_block">
				<span class="gal">
					<iframe width="750" height="485" src="https://www.youtube.com/embed/3-SXMJKVXPM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</span>
			</span>
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