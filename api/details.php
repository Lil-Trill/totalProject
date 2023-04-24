<?php
//isset — Определяет, была ли установлена переменная значением, отличным от null
class Details extends Core{
    public function get_content(){
        if(isset($_GET['id'])){
            $id = $this->formatstr($_GET['id']);
            include("models/mod_detail.php");
        }
        else{
            echo "<p>Неправильные данные</p>";
        }
    }
}