<?php
   	/* Запускаем сессию */
    session_start();
 
    /* Добавляем файл подключения к БД */
    require_once("bs.php");
 
    /* Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы */
    $_SESSION["error_messages"] = "";
 
    /* Объявляем ячейку для добавления успешных сообщений */
    $_SESSION["success_messages"] = "";
	
    	/* Была ли нажата кнопка зарегистрироваться. Если нет, то выведем пользователю сообщение об ошибке */
    	if(isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])) {
     	
    	/* Проверяем если в глобальном массиве $_POST существуют данные отправленные из формы */
 		if(isset($_POST["s_name"])){

     	/* Обрезаем пробелы */
    	$s_name = trim($_POST["s_name"]);

 		/* Проверяем переменную на пустоту */
    	if(!empty($s_name)){

        /* Преобразуем специальные символы в HTML */
        $s_name = htmlspecialchars($s_name, ENT_QUOTES);
    	} else {
        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваше имя</p>";
 
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
 
        /* Останавливаем скрипт */
        exit();
    	}
 
     	} else {
    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с именем</p>";
 
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем скрипт */
    	exit();
		}
 
 
		if(isset($_POST["f_name"])){
 
    	/* Обрезаем пробелы с начала и с конца строки */
    	$f_name = trim($_POST["f_name"]);
 
 		/* Проверяем переменную на пустоту */
    	if(!empty($f_name)){

        /* Преобразуем специальные символы в HTML */
        $f_name = htmlspecialchars($f_name, ENT_QUOTES);
    	
    	} else {
 
        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Вашу фамилию</p>";
         
        //Возвращаем пользователя на страницу регистрации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
 
        /* Останавливаем  скрипт */
        exit();
    	}
 
		} else {
 
    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с фамилией</p>";
     
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем  скрипт */
    	exit();
		}
 	
    	/* Проверяем если в глобальном массиве $_POST существуют данные отправленные из формы */
 		if(isset($_POST["login"])){

     	/* Обрезаем пробелы */
    	$login = trim($_POST["login"]);

 		/* Проверяем переменную на пустоту */
    	if(!empty($login)){

        /* Преобразуем специальные символы в HTML */
        $login = htmlspecialchars($login, ENT_QUOTES);
    	} else {
        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите имя пользователя</p>";
 
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
 
        /* Останавливаем скрипт */
        exit();
    	}
 
     	} else {
    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с именем пользователя</p>";
 
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем скрипт */
    	exit();
		}
 
		if(isset($_POST["email"])) {
 
    	/* Обрезаем пробелы с начала и с конца строки */
    	$email = trim($_POST["email"]);
 
    	if(!empty($email)){
 
        $email = htmlspecialchars($email, ENT_QUOTES);
 
        /* Проверяем формат полученного почтового адреса */
		$reg_email = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";
 
		/* Если формат полученного почтового адреса не соответствует */
		if( !preg_match($reg_email, $email)){

    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error' >Вы ввели неправельный email</p>";
     
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем  скрипт */
    	exit();
		}
 
		/* Проверяем нет ли уже такого адреса в БД */
		$result_query = $mysqli->query("SELECT `email` FROM `users` WHERE `email`='".$email."'");
 
		/* Если кол-во полученных строк ровно единице, пользователь уже зарегистрирован */
		if($result_query->num_rows == 1) {
 
    	/* Если полученный результат не равен false */
    	if(($row = $result_query->fetch_assoc()) != false){
         
        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Пользователь с таким email уже зарегистрирован</p>";
             
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
         
    	} else {

        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка в запросе к БД</p>";
         
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
    	}
 
    	/* закрытие выборки */
    	$result_query->close();
 
    	/* Останавливаем  скрипт */
    	exit();
		}
 
		/* закрытие выборки */
		$result_query->close();
 
    	} else {

        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваш e-mail</p>";
         
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
 
        /* Останавливаем  скрипт */
        exit();
    	}
 
		} else {

    	/* Сохраняем в сессию сообщение об ошибке */ 
    	$_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле для ввода E-mail</p>";
     
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем  скрипт */
    	exit();
		}
 
		if(isset($_POST["password"])){
 
    	/* Обрезаем пробелы с начала и с конца строки */
    	$password = trim($_POST["password"]);
 
    	if(!empty($password)){
        $password = htmlspecialchars($password, ENT_QUOTES);
 
        /* Шифруем пароль */
        $password = ($password."top_secret"); 
    	
    	} else {
        
        /* Сохраняем в сессию сообщение об ошибке */
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваш пароль</p>";
         
        /* Возвращаем пользователя на страницу регистрации */
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/reg.php");
 
        /* Останавливаем  скрипт */
        exit();
    	}
 
		} else {

    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле для ввода пароля</p>";
     
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем  скрипт */
    	exit();
		}
 
		/* Запрос на добавления пользователя в БД */
		$result_query_insert = $mysqli->query("INSERT INTO `users` (s_name, f_name, login, email, password) VALUES ('".$s_name."', '".$f_name."', '".$login."', '".$email."', '".$password."')");
 
		if(!$result_query_insert){
    	/* Сохраняем в сессию сообщение об ошибке */
    	$_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления пользователя в БД</p>";
     
    	/* Возвращаем пользователя на страницу регистрации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/reg.php");
 
    	/* Останавливаем  скрипт */
    	exit();

		} else {
 
    	$_SESSION["success_messages"] = "<p class='success_message'>Регистрация прошла успешно <br/>Теперь Вы можете авторизоваться</p>";
 
    	/* Отправляем пользователя на страницу авторизации */
    	header("HTTP/1.1 301 Moved Permanently");
    	header("Location: ".$address_site."/login.php");
		}
 
		/* Завершение запроса */
		$result_query_insert->close();
 
		/* Закрываем подключение к БД */
		$mysqli->close();

    	}

?>