<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="
        text-align: center;
        margin: 0;
        height: 50px;
        background-color: white;">Админ Системы</h1>

    <div style="
        display: flex;
        flex-wrap: nowrap;
        flex-direction: row;
        align-content: center;
        justify-content: space-around;
        align-items: center;">

        <div>
            <form method="post" style="background-color: lightgray;">
                <h3>Редактирование сотрудников деканата</h3>

                <div style="margin-left: 62px;">
                    <li style="list-style-type: none"><input type="text" placeholder="Имя" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Фамилия" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Прописка" class="form_input"></li>
                </div>

                <label for="">Кафедра</label>
                <select name="">
                    <option value="">Выберите кафедру</option>
                    <option value="1">Кафедра 1</option>
                    <option value="2">Кафедра 2</option>
                </select>

                <div style="margin-left: 62px;">
                    <li style="list-style-type: none"><input type="text" placeholder="Логин" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Пароль" class="form_input"></li>
                </div>

                <button class="form_button">Редактировать</button>
            </form>
        </div>
    </div>

    <div>
        <div>
            <form style="background-color: lightgray;" method="post">
                <h3>Прикрепление сотрудников деканата</h3>
                <li style="list-style-type: none">
                    <label for="">ФИО</label>
                    <select name="">
                        <option value="">Выберите ФИО</option>
                        <option value="1">Сотрудник 1</option>
                        <option value="2">Сотрудник 2</option>
                    </select>
                </li>

                <li style="list-style-type: none">
                    <label for="">Предмет</label>
                    <select name="">
                        <option value="">Выберите предмет</option>
                        <option value="1">Предмет 1</option>
                        <option value="2">Предмет 2</option>
                    </select>
                </li>

                <button class="form_button">Прикрепить</button>
            </form>
        </div>

        <div>
            <form style="background-color: lightgray;" method="post">
                <h3>Добавить новую кафедру</h3>
                <li style="list-style-type: none"><input type="text" placeholder="Кафедра" class="form_input"></li>
                <button class="form_button">Прикрепить</button>
            </form>
        </div>
    </div>

    <div>
        <form style="background-color: lightgray;" method="post">
            <h3>Добавление новых сотрудников деканата</h3>

            <div style="margin-left: 62px;">
                <li style="list-style-type: none"><input type="text" placeholder="Имя" class="form_input"></li>
                <li style="list-style-type: none"><input type="text" placeholder="Фамилия" class="form_input"></li>
                <li style="list-style-type: none"><input type="text" placeholder="Отчество" class="form_input"></li>
            </div>

            <label for="">Кафедра</label>
            <select name="">
                <option value="">Выберите кафедру</option>
                <option value="1">Кафедра 1</option>
                <option value="2">Кафедра 2</option>
            </select>

            <div style="margin-left: 62px;">
                <li style="list-style-type: none"><input type="text" placeholder="Логин" class="form_input"></li>
                <li style="list-style-type: none"><input type="text" placeholder="Пароль" class="form_input"></li>
            </div>

            <button class="form_button">Создать</button>
        </form>
    </div>
</body>

</html>