<?php

header("Content-Type:text/html; charset=UTF-8");

require_once("api/config.php");
require_once("api/core.php");


//проверяем существование файла
if(file_exists("api/main.php")){
    include("api/main.php");
    //проверяем существование класса
    if(class_exists("Main")){
        $obj = new Main();//создаём объект
        $obj->get_body();
    }
    else{
        exit("<p>неверный класс</p>");
    }
}
else{
    exit("<p>неверный путь</p>");
}