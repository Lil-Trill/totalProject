<?php
abstract class Core {
    protected $connect;//соединение с базой данных

    public function __construct(){
        $this->connect = new mysqli(HOST,USER,PASS,DB);
        if($this->connect->connect_error)
            exit("не ну это бан!!!!!!".$this->connect_error);
        
        //устанавливаем кодировку
        $this->connect->set_charset("utf8");
    }

    public function __destruct(){
        $this->connect->close();
    }

    public function get_body(){
        include "template/index.php";
    }

    public function formatstr($str){
        $str = trim($str);//трим удаляет пробелы из начала и конца строки
        $str = stripslashes($str);//удаляет экранирование символов
        $str = htmlspecialchars($str);//преобразует специальные символы в html-сущности
        return $str;
    }
}