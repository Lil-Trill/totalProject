<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <label for="age"></label>
    <input type="range" id="age" name="age" min="0" value="110" max="110" step="1" oninput="level.value = age.valueAsNumber">
    <output for="age" name="level">110</output>
    <input type="submit" value="Фильтровать">
</form>

<?php

 //код запроса
$sql = " ";
if(isset($_POST['age'])){
    $age = $this->formatstr($_POST['age']);
    $sql .= "WHERE age < $age";
}
//выполнить запрос
$result = $this->connect->query("SELECT * FROM students".$sql);
//вывести результат
//цикл выполняется пока в row записываются картежи из БД
while($row = $result->fetch_assoc()){
    echo "<div>
    <a href='?option=details&id=$row[student_id]'>
    $row[lname]</a> $row[fname],$row[gender],$row[age]
    </div>";
}