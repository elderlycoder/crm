const removeBtns = document.querySelectorAll('.goods__item-remove'),
    removeBtn = document.querySelector('.goods__item-remove'),
    strItem = document.querySelectorAll('.grp-tr-part'); // получаем массив из строк деталей размещенных в заказе
let count = 1;

removeBtn.innerHTML = '&times'; // добавляем крестик в кружочек удаления
// добавление (клонирование) нового input
function addform() { // ф-ия висящая на кнопке

    var a = document.getElementById('num'); // существующий input с id=”num” в перем a
    var newA = a.cloneNode(true); // клонируем

    if (newA) {
        count++;
        newA.id = 'num' + count;
        a.parentNode.insertBefore(newA, a.nextSibling); // выводим на страницу после перем. a

    }
}

removeBtns.forEach(function (v, i) {
    v.addEventListener('click', function () { // отслtживаем событие click
       let elem = document.querySelector('.grp-tr-part');
        elem.parentNode.removeChild(elem);

    });
});
 //var input = document.createElement('input');
//input.innerHTML = "<strong>Ура!</strong> Вы прочитали это важное сообщение.";
//вариант 3 - добавит перед элементом с id="xyz"
//var elem = document.getElementById ('num1');
//elem.parentNode.insertBefore (input, elem);
 //document.body.insertBefore(input, document.body.firstChild);
