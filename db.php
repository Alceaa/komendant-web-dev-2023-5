<?php
    define('DB_HOST', ''); //Адрес
    define('DB_USER', ''); //Имя пользователя
    define('DB_PASSWORD', ''); //Пароль
    define('DB_NAME', ''); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
?>