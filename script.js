const formInsert = document.getElementById("form-insert-student");

formInsert.addEventListener("submit",(event)=>{
    event.preventDefault();//отменяем отправку формы
    let formData = new FormData(formInsert);//собираем данные с формы ->
    //->которые ввёл пользователь
    let xhr = new XMLHttpRequest();//создаём объект отправки запроса на сервер
    xhr.open("POST","insertStudent.php");//открываем соединение
    xhr.send(formData);//отправка данных на сервер
    xhr.onload = ()=>{console.log(xhr.response)};
});