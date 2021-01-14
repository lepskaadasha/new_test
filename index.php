<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="js.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form class="form1" method="post">
        <input type="number" required placeholder="a" name="num1" id="num1">
        <input type="number" required placeholder="b" name="num2" id="num2">
        <input type="button" onclick="zad1()" value="Задание 1">
        <input type="text" name="res" readonly id="res">
    </form>
    <form class="form2" action="z2.php" method="post">
        <p>Укажите произведение числе 8 и 3</p>
        <label for=""><input type="radio" name="rad" value="24" id="r1">24</label><br>
        <label for=""><input type="radio" name="rad" value="28" id="r2">28</label><br>
        <label for=""><input type="radio" name="rad" value="16" id="r3">16</label><br>
        <label for=""><input type="radio" name="rad" value="21" id="r4">21</label><br>
        <p>Укажите числа, в записи которых отсутствует разряд сотен</p>
        <label for=""><input type="checkbox" name="check" value="1" id="ch1">12</label><br>
        <label for=""><input type="checkbox" name="check" value="1" id="ch2">10</label><br>
        <label for=""><input type="checkbox" name="check" value="0" id="ch3">506</label><br>
        <label for=""><input type="checkbox" name="check" value="0" id="ch4">111</label><br>
        <p>Подумайте, сколько всего четных чисел содержиться между числами 5 и 13</p>
        <select name="sel" id="sel">
            <option value="1">одно</option>
            <option value="2">два</option>
            <option value="3">три</option>
            <option value="4">четыре</option>
        </select><br>
        <input type="button" onclick="zad2()" id="btn_res2" value="Результат"><br>
        <label for="">Результат теста: <input type="text" readonly name="res2" id="res2"></label>
    </form>
    <form class="form3" action="z3.php" method="post">    
        <p>Калькулятор нахождения площади параллелограмма</p>
        <p style="margin-bottom: 0px;">1. Выберите известные параметры</p>
        <label for=""><input type="checkbox" value="a" name="check" id="check1">сторона а</label><br>
        <label for=""><input type="checkbox" value="b" name="check" id="check2">сторона b</label><br>
        <label for=""><input type="checkbox" value="h" name="check" id="check3">высота h</label><br>
        <label for=""><input type="checkbox" value="y" name="check" id="check4">угол между сторонами</label><br>
        <p style="margin-bottom: 0px;">2. Введите значения</p>
        <input type="number" min="1" placeholder="сторона а" name="a" id="a"><br>
        <input type="number" min="1" placeholder="сторона b" name="a" id="b"><br>
        <input type="number" min="1" placeholder="высота h" name="a" id="h"><br>
        <input type="number" min="1" placeholder="угол между сторонами" name="a" id="y"><br><br>
        <input type="button" onclick="zad3()" value="Узнать результат"><br>
        <label for="">Площадь параллелограмма:<input type="text" readonly name="res3" id="res3"></label>
    </form>
    <form class="form4" action="z4.php" method="post">
        <input type="email" name="check" id="1">
        <input type="button" onclick="zad2()" id="btn_res2" value="Результат"><br>
        <label for="">Результат теста: <input type="text" readonly name="res2" id="res2"></label>
    </form>

    <input type="email" name="check" id="1">
</body>
</html>