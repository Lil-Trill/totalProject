<?php

use PSpell\Config;
$sql = "SELECT * FROM `groups`";
$title = $_POST['title'];

require_once("./config.php");

 //подключение к БД
 $connect = new mysqli(HOST,USER,PASS,DB);
 if($connect->connect_error)
     exit("не ну это бан!!!!!!".connect_error);
 
 //устанавливаем кодировку привет
 $connect->set_charset("utf8");

 //код запроса
 $sql = "INSERT INTO `groups`(`title`) VALUES ('$title')";

//выполнение запроса
$result = $connect->query($sql);
 

if($result) echo "Ok"; //редирект, переход на главную страничку
else echo "Error 14f769hj9567";

