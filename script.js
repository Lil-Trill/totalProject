const formInsert = document.getElementById("form-insert-student");
const message = document.querySelector(".message");
const content = document.querySelector(".content");

formInsert.addEventListener("submit",(event)=>{
    event.preventDefault();//отменяем отправку формы
    let formData = new FormData(formInsert);//собираем данные с формы ->
    //->которые ввёл пользователь
    let xhr = new XMLHttpRequest();//создаём объект отправки запроса на сервер
    xhr.open("POST","insertStudent.php");//открываем соединение
    xhr.send(formData);//отправка данных на сервер
    xhr.onload = ()=>{
        if(xhr.response == "Ok"){
            message.innerHTML = "студент добавлен";
            message.classList.add("success");
            message.classList.add("showMessage");
            let div = document.createElement("div");
            let fname = formData.get("fname");
            let lname = formData.get("lname");
            let gender = formData.get("gender");
            let age = formData.get("age");

            div.innerHTML = `${fname}, ${lname}, ${gender}, ${age}`;
            content.append(div);
        }
        else{
            message.innerHTML = "студента не получилось добавить, попробуйте ещё раз";
            message.classList.add("reject");
            message.classList.add("showMessage");
        }
    };
});
//работа с таблицей групп
const formInsertGrops = document.getElementById("form-insert-groups");
const contentGroups = document.querySelector(".content_groups");

formInsertGrops.addEventListener("submit", (event)=>{
    event.preventDefault();//отменяем отправку формы
    let formData = new FormData(formInsertGrops);//собираем данные с формы ->
    //->которые ввёл пользователь
    let xhr = new XMLHttpRequest();//создаём объект отправки запроса на сервер
    xhr.open("POST","insertGroup.php");//открываем соединение
    xhr.send(formData);//отправка данных на сервер
    xhr.onload = ()=>{
        if(xhr.response == "Ok"){
            message.innerHTML = "студент добавлен";
            message.classList.add("success");
            message.classList.add("showMessage");
            let div = document.createElement("div");
            let title = formData.get("title");
            div.innerHTML = `${title}`;
            contentGroups.append(div);
        }
        else{
            message.innerHTML = "студента не получилось добавить, попробуйте ещё раз";
            message.classList.add("reject");
            message.classList.add("showMessage");
        }
    };
});