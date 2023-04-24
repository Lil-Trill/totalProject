<?php

//создание подготавливаемого запроса
$result = $this->connect->prepare("SELECT * FROM students WHERE student_id=?");
//связываение параметров с метками
$result->bind_param("i",$id);
//выполнение запроса
$result->execute();
//получение данных
$rows = $result->get_result();

if(!$rows) echo "<p>данных нет</p>";
else{
    echo "<p class='back'><a href='/totalProject'>back</a></p>";
    $myrow = $rows->fetch_assoc();
    echo "<div>
    $myrow[lname],$myrow[fname],$myrow[age]
</div>";
}