<?php

use PSpell\Config;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];

require_once("./config.php");

 //подключение к БД
 $connect = new mysqli(HOST,USER,PASS,DB);
 if($connect->connect_error)
     exit("не ну это бан!!!!!!".connect_error);
 
 //устанавливаем кодировку привет
 $connect->set_charset("utf8");

 //код запроса
 $sql = "INSERT INTO `students`(`fname`, `lname`, `gender`, `age`) VALUES ('$fname','$lname ','$gender',$age)
 ";

//выполнение запроса
$result = $connect->query($sql);
 

if($result) echo "Ok"; //редирект, переход на главную страничку
else echo "Error 14f769hj9567";
