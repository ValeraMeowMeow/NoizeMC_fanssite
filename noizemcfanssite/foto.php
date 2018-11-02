<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Медиа | Фото</title>
		
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
				<a href="forum.php" title="Фан-сайт | Noize MC | Форум">
					<img src="Файлы/форумМ.png" title="Форум">
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
		
		<!-- ГАЛЕРЕЯ -->
		<div class="galsss">
			<span class="block_gal">
				<img src="Галерея/Альбом1/Главная.png" title="Новогодняя ёлка @Kosmonavt">
				<span class="gals_text1">
					Новогодняя ёлка @Kosmonavt
				</span>
				<span class="gals_text2">
					03.01.2018
				</span>
			</span>
			<span class="gals_block">
				<span class="gal">
					<ul class="sl">
						<li id="slide1_1">
							<img src="Галерея/Альбом1/1.png" alt="" />
						</li>
						<li id="slide1_2">
							<img src="Галерея/Альбом1/2.png" alt="" />
						</li>
						<li id="slide1_3">
							<img src="Галерея/Альбом1/3.png" alt="" />
						</li>
						<li id="slide1_4">
							<img src="Галерея/Альбом1/4.png" alt="" />
						</li>
						<li id="slide1_5">
							<img src="Галерея/Альбом1/5.png" alt="" />
						</li>
					</ul>
					<ul class="th">
						<li>
							<a href="#slide1_1">
								<img src="Галерея/Альбом1/1.png" />
							</a>
						</li>
						<li>
							<a href="#slide1_2">
								<img src="Галерея/Альбом1/2.png" />
							</a>
						</li>
						<li>
							<a href="#slide1_3">
								<img src="Галерея/Альбом1/3.png" />
							</a>
						</li>
						<li>
							<a href="#slide1_4">
								<img src="Галерея/Альбом1/4.png" />
							</a>
						</li>
						<li>
							<a href="#slide1_5">
								<img src="Галерея/Альбом1/5.png" />
							</a>
						</li>
					</ul>
				</span>
			</span>
		</div>
		<div class="galsss">
			<span class="block_gal">
				<img src="Галерея/Альбом2/Главная.png" title="Фотосессия by @Dyuzhakin">
				<div class="gals_text1">
					Фотосессия by @Dyuzhakin
				</div>
				<div class="gals_text2">
					17.11.2017
				</div>
			</span>
			<span class="gals_block">
				<span class="gal">
					<ul class="sl">
						<li id="slide2_1">
							<img src="Галерея/Альбом2/1.png" alt="" />
						</li>
						<li id="slide2_2">
							<img src="Галерея/Альбом2/2.png" alt="" />
						</li>
						<li id="slide2_3">
							<img src="Галерея/Альбом2/3.png" alt="" />
						</li>
						<li id="slide2_4">
							<img src="Галерея/Альбом2/4.png" alt="" />
						</li>
						<li id="slide2_5">
							<img src="Галерея/Альбом2/5.png" alt="" />
						</li>
					</ul>
					<ul class="th">
						<li>
							<a href="#slide2_1">
								<img src="Галерея/Альбом2/1.png" />
							</a>
						</li>
						<li>
							<a href="#slide2_2">
								<img src="Галерея/Альбом2/2.png" />
							</a>
						</li>
						<li>
							<a href="#slide2_3">
								<img src="Галерея/Альбом2/3.png" />
							</a>
						</li>
						<li>
							<a href="#slide2_4">
								<img src="Галерея/Альбом2/4.png" />
							</a>
						</li>
						<li>
							<a href="#slide2_5">
								<img src="Галерея/Альбом2/5.png" />
							</a>
						</li>
					</ul>
				</span>
			</span>
		</div>
		<div class="galsss">
			<span class="block_gal">
				<img src="Галерея/Альбом3/Главная.png" title="Москва @ Зелёный театр (День Вышки)">
				<div class="gals_text1">
					Москва @ Зелёный театр (День Вышки)
				</div>
				<div class="gals_text2">
					16.09.2017
				</div>
			</span>
			<span class="gals_block">
				<span class="gal">
					<ul class="sl">
						<li id="slide3_1">
							<img src="Галерея/Альбом3/1.png" alt="" />
						</li>
						<li id="slide3_2">
							<img src="Галерея/Альбом3/2.png" alt="" />
						</li>
						<li id="slide3_3">
							<img src="Галерея/Альбом3/3.png" alt="" />
						</li>
						<li id="slide3_4">
							<img src="Галерея/Альбом3/4.png" alt="" />
						</li>
						<li id="slide3_5">
							<img src="Галерея/Альбом3/5.png" alt="" />
						</li>
					</ul>
					<ul class="th">
						<li>
							<a href="#slide3_1">
								<img src="Галерея/Альбом3/1.png" />
							</a>
						</li>
						<li>
							<a href="#slide3_2">
								<img src="Галерея/Альбом3/2.png" />
							</a>
						</li>
						<li>
							<a href="#slide3_3">
								<img src="Галерея/Альбом3/3.png" />
							</a>
						</li>
						<li>
							<a href="#slide3_4">
								<img src="Галерея/Альбом3/4.png" />
							</a>
						</li>
						<li>
							<a href="#slide3_5">
								<img src="Галерея/Альбом3/5.png" />
							</a>
						</li>
					</ul>
				</span>
			</span>
		</div>
		<div class="galsss">
			<span class="block_gal">
				<img src="Галерея/Альбом4/Главная.png" title="Москва @ фестиваль “Большой Рэп”, Лужники">
				<div class="gals_text1">
					Москва @ фестиваль “Большой Рэп”, Лужники
				</div>
				<div class="gals_text2">
					10.09.2017
				</div>
			</span>
			<span class="gals_block">
				<span class="gal">
					<ul class="sl">
						<li id="slide4_1">
							<img src="Галерея/Альбом4/1.png" alt="" />
						</li>
						<li id="slide4_2">
							<img src="Галерея/Альбом4/2.png" alt="" />
						</li>
						<li id="slide4_3">
							<img src="Галерея/Альбом4/3.png" alt="" />
						</li>
						<li id="slide4_4">
							<img src="Галерея/Альбом4/4.png" alt="" />
						</li>
						<li id="slide4_5">
							<img src="Галерея/Альбом4/5.png" alt="" />
						</li>
					</ul>
					<ul class="th">
						<li>
							<a href="#slide4_1">
								<img src="Галерея/Альбом4/1.png" />
							</a>
						</li>
						<li>
							<a href="#slide4_2">
								<img src="Галерея/Альбом4/2.png" />
							</a>
						</li>
						<li>
							<a href="#slide4_3">
								<img src="Галерея/Альбом4/3.png" />
							</a>
						</li>
						<li>
							<a href="#slide4_4">
								<img src="Галерея/Альбом4/4.png" />
							</a>
						</li>
						<li>
							<a href="#slide4_5">
								<img src="Галерея/Альбом4/5.png" />
							</a>
						</li>
					</ul>
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