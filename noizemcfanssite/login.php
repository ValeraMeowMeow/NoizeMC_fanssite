<?php
   	/* Запускаем сессию */
    session_start();
 
    /* Добавляем файл подключения к БД */
    require_once("bs.php");
 
    /* Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы */
    $_SESSION["error_messages"] = "";
 
    /* Объявляем ячейку для добавления успешных сообщений */
    $_SESSION["success_messages"] = "";
	
?>

<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | Вход</title>
		
		<!-- Подключаемые файлы -->
		<link href="Styles-горизонт.css" rel="stylesheet" type="text/css" media="all and (orientation:landscape)">
		<link href="Styles-вертикаль.css" rel="stylesheet" type="text/css" media="all and (orientation:portrait)">
		<link rel="shortcut icon" href="Файлы/Иконка.png" type="image/png"> 
		
		<!-- Скрипты -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
    	$(document).ready(function(){
        "use strict";
        /* Проверка email на соответствие */
 
        /* регулярное выражение для проверки email */
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');
         
        mail.blur(function(){
            if(mail.val() != ''){
 
                /* Проверяем email на соответствие регулярному выражению */
                if(mail.val().search(pattern) == 0){
                    /* Убираем сообщение об ошибке */
                    $('#valid_email_message').text('');
 
                    /* Активируем кнопку отправки */
                    $('input[type=submit]').attr('disabled', false);
                } else {
                    /* Выводим сообщение об ошибке */
                    $('#valid_email_message').text('Не правильный Email');
 
                    /* Не активируем кнопку отправки */
                    $('input[type=submit]').attr('disabled', true);
                }
            } else {
                $('#valid_email_message').text('Введите Ваш email');
            }
        }
        );
 
        /* Проверка длины пароля */
        var password = $('input[name=password]');
         
        password.blur(function(){
            if(password.val() != ''){
 
                /* Если длина введенного пароля < 6 символов -> сообщение об ошибке */
                if(password.val().length < 6){
                    /* Cообщение об ошибке */
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');
 
                    /* Не активируем кнопку отправки */
                    $('input[type=submit]').attr('disabled', true);     
                } else {
                    /* Убираем сообщение об ошибке */
                    $('#valid_password_message').text('');
                    /* Активируем кнопку отправки */
                    $('input[type=submit]').attr('disabled', false);
                }
            } else {
                $('#valid_password_message').text('Введите пароль');
            }
        }
        );
    	}
   		);
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

		<!-- Блок для вывода сообщений -->
		<div class="block_for_messages">
    
    	<?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            /* При обновлении страницы уничтожались данные */
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            /* При обновлении страницы уничтожались данные */
            unset($_SESSION["success_messages"]);
        }
    	
    	?>
		</div>
 
		<?php
    	/* Если пользователь не авторизован -> выводим форму авторизации */
    	/* Иначе сообщение уже авторизован */
    	if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
		?>
 
 
    	<div class="search">
        	
        	<h1>Форма авторизации</h1>
        	
        	<form action="login_bs.php" method="post" name="form_auth">
            
            <table>
                <tbody>

                	<tr>
                    	<td>
                        	<input type="email" name="email" placeholder="Email" required="required"><br>
                        	<span id="valid_email_message" class="mesage_error"></span>
                    	</td>
                	</tr>
          
                	<tr>
                    	<td>
                        	<input type="password" name="password" placeholder="Пароль" required="required"><br>
                        	<span id="valid_password_message" class="mesage_error"></span>
                    	</td>
                	</tr>
 
                	<tr>
                    	<td colspan="2">
                    	    <input type="submit" name="btn_submit_auth" value="Войти">
                    	</td>
                	</tr>
            	</tbody>
        	</table>

        	</form>

    	</div>
 
		<?php
    	} else {
		?>
 
    	<div id="authorized">
        	<h1>Вы уже авторизованы</h1>
    	</div>
 
		<?php
   			}
		?>
		
		<!-- РЕГИСТРАЦИЯ -->
		<div class="text_product">
			<a href="reg.php" title="Фан-сайт | Noize MC | Регистрация">Зарегистрироваться</a>
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