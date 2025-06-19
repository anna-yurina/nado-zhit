function execCalculator() {
    let result;
    let num1 = Number(document.getElementById('num1').value);
    let num2 = Number(document.getElementById('num2').value);
    let select = document.getElementById('select-operator'); // выбираем элемент select.
    let selectedValue = select.value // получаем значение выбранного элемента

    switch (selectedValue) {
        case 'plus':
            result = num1 + num2;
            break;
        case 'minus':
            result = num1 - num2;
            break;
        case 'times':
            result = num1 * num2;
            break;
        case 'divide':
            result = num1 / num2;
            break;
        case 'exponentiation':
            result = num1 ** num2;
            break;
    }
    document.getElementById("result").innerHTML = result;
}

function colorSwitch() {
    let hFirst = document.getElementById('heading');
    hFirst.classList.add('color-switch-text-red');
    let label = document.getElementById('first-label');
    label.classList.add('color-switch-text-red');
    let num1 = document.getElementById('num1');
    num1.classList.add('color-switch-background-yellow');
    let secondLabel = document.getElementById('second-label');
    secondLabel.classList.add('color-switch-text-red');
    let select = document.getElementById('select-operator');
    select.classList.add('color-switch-background-green');
    let thirdLabel = document.getElementById('third-label');
    thirdLabel.classList.add('color-switch-text-red');
    let num2 = document.getElementById('num2');
    num2.classList.add('color-switch-background-red');
    let equalsColor = document.getElementById('equals');
    equalsColor.classList.add('color-switch-black');
    let makeRedButton = document.getElementById('makeRed');
    makeRedButton.classList.add('color-switch-pink');
    let returnButton = document.getElementById('returnButton');
    returnButton.classList.add('color-switch-pink');
}

function colorReturn(){
    let hFirst = document.getElementById('heading');
    hFirst.classList.remove('color-switch-text-red');
    let label = document.getElementById('first-label');
    label.classList.remove('color-switch-text-red');
    let num1 = document.getElementById('num1');
    num1.classList.remove('color-switch-background-yellow');
    let secondLabel = document.getElementById('second-label');
    secondLabel.classList.remove('color-switch-text-red');
    let select = document.getElementById('select-operator');
    select.classList.remove('color-switch-background-green');
    let thirdLabel = document.getElementById('third-label');
    thirdLabel.classList.remove('color-switch-text-red');
    let num2 = document.getElementById('num2');
    num2.classList.remove('color-switch-background-red');
    let equalsColor = document.getElementById('equals');
    equalsColor.classList.remove('color-switch-black');
    let makeRedButton = document.getElementById('makeRed');
    makeRedButton.classList.remove('color-switch-pink');
    let returnButton = document.getElementById('returnButton');
    returnButton.classList.remove('color-switch-pink');
}