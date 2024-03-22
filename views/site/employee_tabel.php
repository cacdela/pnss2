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
        background-color: white;">Сотрудник деканата</h1>

    <div style="
        display: flex;
        flex-wrap: nowrap;
        flex-direction: row;
        align-content: center;
        justify-content: space-around;
        align-items: center;">

        <div>
            <form method="post" style="background-color: lightgray;">
                <h3>Добавление педагогических сотрудников</h3>
                <div style="margin-left: 62px;">
                    <li style="list-style-type: none"><input type="text" placeholder="Имя" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Фамилия" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Отчество" class="form_input"></li>
                </div>
                <div>
                    <label for="">Пол</label>
                    <select name="" id="" style="margin-left: 31px;">
                        <option value="">Выберете пол</option>
                        <option value="male">Мужской</option>
                        <option value="female">Женский</option>
                    </select>
                </div>
                <div>
                    <label for="">Предмет</label>
                    <select name="" id="">
                        <option value="">Выберете предмет</option>
                        <option value=""></option>
                    </select>
                </div>
                <div style="margin-left: 62px;">
                    <li style="list-style-type: none"><input type="text" placeholder="Логин" class="form_input"></li>
                    <li style="list-style-type: none"><input type="text" placeholder="Пароль" class="form_input"></li>
                </div>
                <button class="form_button">Добавить</button>
            </form>
        </div>
    </div>

    <div>
        <div>
            <form style="background-color: lightgray;" method="post">
                <h3>Прикрепление сотрудников деканата</h3>
                <li style="list-style-type: none; margin-left: 23px;">
                    <label for="">ФИО</label>
                    <select name="" id="">
                        <option value="">Выберите ФИО</option>
                        <option value=""></option>
                    </select>
                </li>
                <li style="list-style-type: none">
                    <label for="">Предмет</label>
                    <select name="" id="">
                        <option value="">Выберите предмет</option>
                        <option value=""></option>
                    </select>
                </li>
                <button class="form_button">Прикрепить</button>
            </form>
        </div>
    </div>

    <div>
        <form style="background-color: lightgray;" method="post">
            <h3>Список сотрудников по дисциплинам</h3>
            <div style="background-color: white; margin-top: 110px; padding: 29px; width: 310px; height: 127px;"></div>
        </form>
    </div>
</body>

</html>