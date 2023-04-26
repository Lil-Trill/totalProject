<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <label for="age"></label>
    <input type="range" id="age" name="age" min="0" value="110" max="110" step="1" oninput="level.value = age.valueAsNumber">
    <output for="age" name="level">110</output>
    <input type="submit" value="Фильтровать">
    <input type="radio" name="sort-age" value="asc" id="sort-asc">
    <label for="sort-asc">по-возрастанию</label>
    <input type="radio" name="sort-age" value="desc" id="sort-desc">
    <label for="sort-desc">по-убыванию</label>
</form>

<?php

 //код запроса
$sql = " ";
if(isset($_POST['age'])){
    $age = $this->formatstr($_POST['age']);
    $sql .= "WHERE age < $age";
}

if(isset($_POST['sort-age'])){
    $sort = $this->formatstr($_POST['sort-age']);
    $sql .= " ORDER BY age $sort";
}

//выполнить запрос
$result = $this->connect->query("SELECT * FROM students".$sql);
print_r("SELECT * FROM students".$sql);
//вывести результат
//цикл выполняется пока в row записываются картежи из БД
while($row = $result->fetch_assoc()){
    echo "<div>
    <a href='?option=details&id=$row[student_id]'>
    $row[lname]</a> $row[fname],$row[gender],$row[age]
    </div>";
}