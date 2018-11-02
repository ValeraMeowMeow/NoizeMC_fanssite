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
    $database_2 = "forum"; 
     
    function bs() {
        /* Подключение к базе данный через MySQLi */
        $mysqli_2 = mysqli_connect($server, $username, $password, $database_2)
            or die("Error: ".mysqli_error($mysqli_2));
        if(!mysqli_set_charset($mysqli_2, "utf8")) {
            printf("Error: ".mysqli_error($mysqli_2));
        }
        return $mysqli_2;
    }
 
    /* Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта */
    $address_site = "http://noizemcfanssite";
?>