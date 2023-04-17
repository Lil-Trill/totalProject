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
}