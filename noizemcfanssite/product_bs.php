<?php
    /* Указываем кодировку */
    header('Content-Type: text/html; charset=utf-8');

    /* имя хоста */
    $server = "127.0.0.1:3306"; 
    /* Имя пользователя БД */
    $username = "root"; 
    /* Пароль пользователя */
    $password = ""; 
    /* Имя базы данных */
    $database_pr = "zakaz";
    /* Имя таблицы */
    $table_pr = "zakaz";
     
    /* Подключение к базе данный через MySQLi */
    $mysqli_pr = new mysqli($server, $username, $password, $database_pr);
 
    /* Проверяем, успешность соединения */
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
 
    /* Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта */
    $address_site = "http://noizemcfanssite";

    if (isset($_POST['name_s']) && isset($_POST['email_s']) && isset($_POST['phone_s']) && isset($_POST['count_s'])){

        $name = $_POST['name_s'];
        $email = $_POST['email_s'];
        $phone = $_POST['phone_s'];
        $count = $_POST['count_s'];
        $data = date("m.d.y");
        $p = $_POST['product_s'];

    }

    /* $result = mysql_query("INSERT INTO table (name, email, phone, count, data) VALUES ('$name', '$email', '$phone', '$count', '$data')"); */

    /* $result = $mysqli->query("INSERT INTO ".$table_pr." (name, email, phone, count, data) VALUES ('$name','$email','$phone','$count','$data')"); */

    $result_pr = mysqli_query($mysqli_pr, "SELECT * FROM `zakaz` WHERE email = '".$email."' AND name = '".$name."' AND phone = '".$phone."' AND count = '".$count."' AND data = '".$data."' AND product = '".$p."' "); 

    if ($result_pr == true){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }

?>