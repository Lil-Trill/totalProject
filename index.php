<?php

header("Content-Type:text/html; charset=UTF-8");

require_once("api/config.php");
require_once("api/core.php");

if(isset($_GET['option'])){
    $class = trim(strip_tags($_GET['option']));//очищаем его от HTML и PHP-теги и пробелы из начала и конца строки
}
elseif(isset($_POST['option'])){
    $class = trim(strip_tags($_POST['option']));
}
else{
    $class='main';
}

//проверяем существование файла
if(file_exists("api/".$class.".php")){
    include("api/".$class.".php");
    //проверяем существование класса
    if(class_exists($class)){
        $obj = new $class;//создаём объект
        $obj->get_body();//вызываем функцию класса
    }
    else{
        exit("<p>неверный класс</p>");
    }
}
else{
    exit("<p>неверный путь</p>");
}