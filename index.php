<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиент-серверное приложение</title>
</head>
<body>
<!-- action="insertStudent.php" method="POST" -->
<form>
<input type="text" name="fname" id="fname" placeholder="Введите имя" required><br>
<input type="text" name="lname" id="lname" placeholder="Введите фамилию" required><br>
<input type="number" name="age" id="age" placeholder="Ваш возраст" required><br>
<input type="radio" name="gender" id="m" value="m" checked>
<label for="m">Мужской</label>
<input type="radio" name="gender" id="f" value="f">
<label for="f">Женский</label><br>
<input type="submit" value="Добавить">
</form>

    <?php
        require("./config.php");
        
        //подключение к БД
        $connect = new mysqli(HOST,USER,PASS,DB);
        if($connect->connect_error)
            exit("не ну это бан!!!!!!".connect_error);
        
        //устанавливаем кодировку привет
        $connect->set_charset("utf8");

        //код запроса

        $sql = "SELECT * FROM `students`";
        //выполнить запрос
        $result = $connect->query($sql);
        //вывести результат
        //цикл выполняется пока в row записываются картежи из БД
        while($row = $result->fetch_assoc()){
            echo "<div>
                $row[lname],$row[fname],$row[gender],$row[age]
            </div>";
        }
    ?>
    <div>

    </div>
</body>
</html>