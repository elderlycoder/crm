<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чеклист</title>
</head>
<body>

    <style>
        body {
            margin: 50px;
            font-size: 35px;
            font-family: "Arial", sans-serif;
        }
    
    input[type="checkbox"] {
        display: none;
    }

    div {
        margin: 20px;
    }

    label {
        display: block;
        position: relative;
        cursor: pointer;
        margin-left: 50px;
        color: red;
    }

    label::after {
        content: '';
        width: 40px;
        height: 40px;
        background: red;
        position: absolute;
        display: block;
        left: 1000px;
        top: 0;
    }

    input[type="checkbox"]:checked + label::after {
        background-color: green;
    }

    input[type="checkbox"]:checked + label {
        color: green;
    }
    </style>

    <div class="div">
        <input type="checkbox" id="test">
        <label for="test">1. Создать базу данных и таблицы в ней</label>
    </div>
    
    <div class="div">
        <input type="checkbox" id="test2">
        <label for="test2">2. Вынести шапку в отдельный файл</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test3">
        <label for="test3">3. Подключить БД к проекту, отобразить категории в меню</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test4">
        <label for="test4">4. Вывести карточки товаров на главную страницу</label>
    </div>

    <hr>

    <div class="div">
        <input type="checkbox" id="test5">
        <label for="test5">5. Переход по категориям товаров</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test6">
        <label for="test6">6. Вывести карточку конкретного товара</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test7">
        <label for="test7">7. Добавление товара в корзину, отображение в меню</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test8">
        <label for="test8">8. Отображение товаров в корзине</label>
    </div>

    <hr>

    <div class="div">
        <input type="checkbox" id="test9">
        <label for="test9">9. Удаление товара из корзины</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test10">
        <label for="test10">10. Отправка заказа на почту и сохранение его в БД</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test11">
        <label for="test11">11. Информация в корзине при разных сценариях</label>
    </div>

    <div class="div">
        <input type="checkbox" id="test12">
        <label for="test12">12. Комплексная проверка всего функционала</label>
    </div>

</body>
</html>