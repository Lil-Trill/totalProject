<?php

 //код запроса
$sql = "SELECT * FROM `students`";
//выполнить запрос
$result = $this->connect->query($sql);
//вывести результат
//цикл выполняется пока в row записываются картежи из БД
while($row = $result->fetch_assoc()){
    echo "<div>
        $row[lname],$row[fname],$row[gender],$row[age]
    </div>";
}