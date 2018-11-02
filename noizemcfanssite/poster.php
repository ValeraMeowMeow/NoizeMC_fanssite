<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Афиша</title>
		
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
			<a href="main.php" title="Фан-сайт | Noize MC">
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
		
		<!-- Поиск
		<div class="search">
  			<form>
  				<input type="text" placeholder="Искать здесь...">
  				<button type="submit"></button>
			</form>
		</div> -->
		
		<?php

			$tickets = [
				[
					'id' => 1,
					'city' => 'Пермь',
					'place' => 'MS',
					'data' => '31.10.2018',
					'buy' => 'https://goo.gl/rMKJjh',
				],
				[
					'id' => 2,
					'city' => 'Екатеренбург',
					'place' => 'Teleclub',
					'data' => '01.11.2018',
					'buy' => 'https://goo.gl/syP9wY',
				],
				[
					'id' => 3,
					'city' => 'Сургут',
					'place' => 'РК Вавилон',
					'data' => '03.11.2018',
					'buy' => 'https://goo.gl/g8PNUG',
				],
				[
					'id' => 4,
					'city' => 'Тюмень',
					'place' => 'КТЗ Байконур',
					'data' => '04.11.2018',
					'buy' => 'https://goo.gl/wfdwVK',
				],
				[
					'id' => 5,
					'city' => 'Челябинск',
					'place' => 'Галактика',
					'data' => '05.11.2018',
					'buy' => 'https://goo.gl/xiXkgK',
				],
				[
					'id' => 6,
					'city' => 'Курган',
					'place' => 'Филармония',
					'data' => '06.11.2018',
					'buy' => 'https://goo.gl/WS6X64',
				],
				[
					'id' => 7,
					'city' => 'Уфа',
					'place' => 'Огни Уфы',
					'data' => '08.11.2018',
					'buy' => 'https://goo.gl/PG7Bm3',
				],
				[
					'id' => 8,
					'city' => 'Самара',
					'place' => 'ЗВЕЗДА',
					'data' => '09.11.2018',
					'buy' => 'http://noizemc.info/',
				],
				[
					'id' => 9,
					'city' => 'Саратов',
					'place' => 'Gatsby',
					'data' => '10.11.2018',
					'buy' => 'https://goo.gl/mx4TzX',
				],
				[
					'id' => 10,
					'city' => 'Москва',
					'place' => 'Ледовый дворец Мегаспорт',
					'data' => '24.11.2018',
					'buy' => 'http://noize2018.ru/',
				],
				[
					'id' => 11,
					'city' => 'Белгород',
					'place' => 'ULTRAMARIN CONCERT HALL',
					'data' => '02.12.2018',
					'buy' => 'https://goo.gl/g14C8N',
				],
				[
					'id' => 12,
					'city' => 'Санкт-Петербург',
					'place' => 'СК Юбилейный Санкт-Петербург',
					'data' => '07.12.2018',
					'buy' => 'https://noize2018.ru/spb',
				],
				[
					'id' => 13,
					'city' => 'Архангельск',
					'place' => 'М33',
					'data' => '08.12.2018',
					'buy' => 'https://arh.kassir.ru/koncert/noize-mc#2018-12-08_1900',
				],
			]

		?>

		<span>
			<?php foreach ($tickets as $ticket): ?>

				<div class="ticket_block">
					
					<span class="ticket_data">
						<?php echo $ticket['data']; ?>
					</span>
					
					<span class="ticket_city">
						<?php echo $ticket['city']; ?>
					</span>
					
					<span class="ticket_place">
						<?php echo $ticket['place']; ?>
					</span>

					<span class="buy">
						<a href="<?php echo $ticket['buy']; ?>" title="Купить билет" target="_blank">
							Купить билет
						</a>
					</span>

				</div>

			<?php endforeach; ?>
		</span>

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