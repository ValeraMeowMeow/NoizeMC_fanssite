<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Магазин</title>
		
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

		<!-- ПРОДУКЦИЯ -->
		<div id="shop">

			<?php

				$products = [
					[
						'id' => 1,
						'name' => 'CD Новый альбом',
						'etc' => 'Диск с зажигательными песнями',
						'img' => '/Магазин/CD1.jpg',
						'price' => '200 p.'
					],
					[
						'id' => 2,
						'name' => 'CD Последний альбом',
						'etc' => 'Диск с лирическими песнями',
						'img' => '/Магазин/CD2.jpg',
						'price' => '200 p.'
					],
					[
						'id' => 3,
						'name' => 'CD Царь горы',
						'etc' => 'Диск с восхитительными песнями',
						'img' => '/Магазин/CD3.jpg',
						'price' => '400 p.'
					],
					[
						'id' => 4,
						'name' => 'Шапка Noize MC',
						'etc' => 'Уютная и тёплая шапочка с логотипом',
						'img' => '/Магазин/Шапка-Noize-MC.jpg',
						'price' => '1200 p.'
					],
					[
						'id' => 5,
						'name' => 'Шапка УСТРОЙ ДЕСТРОЙ',
						'etc' => 'Уютная и тёплая шапочка ДЕСТРОЙ',
						'img' => '/Магазин/Шапка-Устрой-Дестрой.jpg',
						'price' => '1200 p.'
					],
					[
						'id' => 6,
						'name' => 'Шапка с черепом',
						'etc' => 'Уютная и тёплая шапочка с черепком',
						'img' => '/Магазин/Шапка-Череп.jpg',
						'price' => '1200 p.'
					],
					[
						'id' => 7,
						'name' => 'Футболка с логотипами Noize MC',
						'etc' => 'Футболка для тусы',
						'img' => '/Магазин/Футболка1.jpg',
						'price' => '1200 p.'
					],
					[
						'id' => 8,
						'name' => 'Футболка Noize MC',
						'etc' => 'Футболка для тусы',
						'img' => '/Магазин/Футболка2.jpg',
						'price' => '1500 p.'
					],
					[
						'id' => 9,
						'name' => 'Футболка Noize MC 15',
						'etc' => 'Футболка для тусы',
						'img' => '/Магазин/Футболка3.jpg',
						'price' => '1500 p.'
					],
					[
						'id' => 10,
						'name' => 'Медиатор',
						'etc' => 'Стиль для твоей гитары',
						'img' => '/Магазин/Медиатор.jpg',
						'price' => '50 p.'
					],
					[
						'id' => 11,
						'name' => 'Значок Орфей и Эвридика',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок1.jpg',
						'price' => '300 p.'
					],
					[
						'id' => 12,
						'name' => 'Значок Череп',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок2.jpg',
						'price' => '300 p.'
					],
					[
						'id' => 13,
						'name' => 'Значок *',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок3.jpg',
						'price' => '300 p.'
					],
					[
						'id' => 14,
						'name' => 'Значок Ваня',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок4.jpg',
						'price' => '300 p.'
					],
					[
						'id' => 15,
						'name' => 'Значок Корона',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок5.jpg',
						'price' => '300 p.'
					],
					[
						'id' => 16,
						'name' => 'Значок Noize MC',
						'etc' => 'Хорошенько прицепи его, а то оторвут (все его хотят)',
						'img' => '/Магазин/Значок6.jpg',
						'price' => '300 p.'
					],
				];

				$page = $_GET['page'];
				if ($page == 'shop') {
					require('shop.php');
				} elseif ($page == 'product') {
					$id = $_GET['id'];
					$a = [];
					foreach ($products as $product) {
						if ($product['id'] == $id) {
							$a = $product;
							break;
						}
					}
					require('product.php');
				};
			
			?>

			<span>
				<?php foreach ($products as $product): ?>
				
				<span class="block_product">
					<div>
						<a href="shop.php?page=product&id=<?php echo $product['id']; ?>" title="Фан-сайт | Noize MC | Магазин | <?php echo $product['name']; ?>">
							<img src="<?php echo $product['img']; ?>" title="<?php echo $product['name']; ?>"/>
						</a>
					<div class="text_product">
						<a href="shop.php?page=product&id=<?php echo $product['id']; ?>" title="Фан-сайт | Noize MC | Магазин | <?php echo $product['name']; ?>">
							<?php echo $product['name']; ?>
						</a>
					</div>

					<div class="text_product_price">
						<?php echo $product['price']; ?>
					</div>

					<div class="text_product_etc">
						<?php echo $product['etc']; ?>
					</div>
					
					<span class="buy">
						<a href="shop.php?page=product&id=<?php echo $product['id']; ?>" title="Фан-сайт | Noize MC | Магазин | <?php echo $product['name']; ?>">Купить
						</a>
					</span>
					
					</div>
				</span>
				
				<?php endforeach; ?>
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