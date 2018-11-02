<?php
    /* Запускаем сессию */
    session_start();
 
    /* Добавляем файл подключения к БД */
    require_once("bs.php");

    /* Объявляем ячейку для добавления ошибок */
	$_SESSION["error_messages"] = '';
 
	/* Объявляем ячейку для добавления успешных сообщений */
	$_SESSION["success_messages"] = '';

	/* Была ли нажата кнопка Войти. Если нет -> сообщение об ошибке */
	if(isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])){
 
    /* Обрезаем пробелы */
	$email = trim($_POST["email"]);
	if(isset($_POST["email"])){
 
    	if(!empty($email)){
        	$email = htmlspecialchars($email, ENT_QUOTES);
 
        	/* Проверяем формат полученного почтового адреса */
       		$reg_email = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";
 
        	/* Если формат полученного почтового адреса не соответствует */
        	if( !preg_match($reg_email, $email)){
            	
            	/* Сохраняем в сессию сообщение об ошибке */
            	$_SESSION["error_messages"] .= "<p class='mesage_error' >Вы ввели неправильный email</p>";
             
            	/* Возвращаем пользователя на страницу авторизации */
            	header("HTTP/1.1 301 Moved Permanently");
            	header("Location: ".$address_site."/login.php");
 
            	/* Останавливаем скрипт */
            	exit();
        	}
    
    		} else {
        	/* Сохраняем в сессию сообщение об ошибке */
        	$_SESSION["error_messages"] .= "<p class='mesage_error' >Поле для ввода email не должна быть пустой.</p>";
         
        	/* Возвращаем пользователя на страницу регистрации */
        	header("HTTP/1.1 301 Moved Permanently");
        	header("Location: ".$address_site."/reg.php");
 
        	/* Останавливаем скрипт */
        	exit();
    		}
     
 		} else {
    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода Email</p>";
     
    	/* Возвращаем пользователя на страницу авторизации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/login.php");
 
    	/* Останавливаем скрипт */
    	exit();
		}

		if(isset($_POST["password"])){
 
    	/* Обрезаем пробелы */
    	$password = trim($_POST["password"]);
 
    	if(!empty($password)){
        	$password = htmlspecialchars($password, ENT_QUOTES);
 
        	/* Шифруем пароль */
        	$password = ($password."top_secret");
    		
    		} else {
        
        	/* Сохраняем в сессию сообщение об ошибке */
        	$_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите Ваш пароль</p>";
         
        	/* Возвращаем пользователя на страницу авторизации */
        	header("HTTP/1.1 301 Moved Permanently");
        	header("Location: ".$address_site."/login.php");
 
        	/* Останавливаем скрипт */
        	exit();
    		}
     
		} else {

    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода пароля</p>";
     
    	/* Возвращаем пользователя на страницу авторизации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/login.php");
 
    	/* Останавливаем скрипт */
    	exit();
		}
 
		/* Запрос в БД */
		$result_query_select = $mysqli->query("SELECT * FROM `users` WHERE email = '".$email."' AND password = '".$password."'");
 
		if(!$result_query_select){
    		/* Сохраняем в сессию сообщение об ошибке */
    		$_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса</p>";
     
    		/* Возвращаем пользователя на страницу авторизации */
    		header("HTTP/1.1 301 Moved Permanently");
    		header("Location: ".$address_site."/login.php");
 
    		/* Останавливаем скрипт */
    		exit();
		
		} else {
 
    		/* Если в базе нет пользователя с такими данными, то выводим сообщение об ошибке */
    		if($result_query_select->num_rows == 1){
         
        	/* Если введенные данные совпадают с данными из базы, то сохраняем логин и пароль в массив сессий */
        	$_SESSION['email'] = $email;
        	$_SESSION['password'] = $password;
 
        	/* Возвращаем пользователя на главную страницу */
        	header("HTTP/1.1 301 Moved Permanently");
        	header("Location: ".$address_site."/main.php");
 
    		} else {
         
        	/* Сохраняем в сессию сообщение об ошибке */
        	$_SESSION["error_messages"] .= "<p class='mesage_error' >Неправильный логин и/или пароль</p>";
         
        	/* Возвращаем пользователя на страницу авторизации */
        	header("HTTP/1.1 301 Moved Permanently");
        	header("Location: ".$address_site."/login.php");
 
        	/* Останавливаем скрипт */
        	exit();
    		}
		}

	} else {
    
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}