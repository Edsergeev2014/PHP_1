<?php
// Урок 2. Условные блоки, ветвление функции.
// п.1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
// ноль можно считать положительным числом.
echo "<h3> Задание п.1: Действия с числами в зависимости от их значений</h3>";
$a = mt_rand(-10,10);
$b = mt_rand(-10,10);
echo "Числа: ".$a." и ".$b."<br/>";
if ($a>=0 && $b>=0) {
    if ($a>$b) echo "Разница чисел: ", $a-$b;
    else echo "Разница чисел: ", $b-$a;
}
elseif ($a<=0 && $b<=0) echo "Произведение чисел: ", $a*$b;
elseif (($a*$b)<0) echo "Сумма чисел: ", $a+$b;

// 2. Присвоить переменной $а значение в промежутке [0..15]. 
// С помощью оператора switch организовать вывод чисел от $a до 15.
echo "<h3> Задание п.2: Раскладываем число с помощью цикла SWITCH </h3>";
$a = mt_rand(0,15);
echo "Число: ".$a."<br/>";
switch ($a) {
    case 15:
        echo $a--.", ";
    case 14:
        echo $a--.", ";
    case 13:
        echo $a--.", ";
    case 12:
        echo $a--.", ";
    case 11:
        echo $a--.", ";
    case 10:
        echo $a--.", ";
    case 9:
        echo $a--.", "; 
    case 8:
        echo $a--.", ";
    case 7:
        echo $a--.", ";
    case 6:
        echo $a--.", ";
    case 5:
        echo $a--.", ";
    case 4:
        echo $a--.", ";
    case 3:
        echo $a--.", ";
    case 2:
        echo $a--.", ";
    case 1:
        echo $a--.", ";
    case 0:
        echo $a;
        break;
}

// 3. Реализовать основные 4 арифметические операции 
// в виде функций с двумя параметрами.
echo "<h3> Задание п.3. Четыре основные функции действий с числами </h3>";
$a = mt_rand(1,10);
$b = mt_rand(1,10);
echo "Числа: ".$a." и ".$b."<br/>";
echo "Сумма: ".sum($a,$b)."<br/>";
echo "Вычесть: ".minus($a,$b)."<br/>";
echo "Умножить: ".multiply($a,$b)."<br/>";
echo "Разделить: ".division($a,$b)."<br/>";
function sum($var1,$var2) {return $var1+$var2;} 
function minus($var1,$var2) {return $var1-$var2;} 
function multiply($var1,$var2) {return $var1*$var2;} 
function division($var1,$var2) {
    if ($var2 != 0) return $var1/$var2;
    else echo "Операция не выполнена: деление на ноль! ";
}

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций 
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
echo "<h3> Задание п.4: Используем функцию mathOperation(arg1, arg2, operation) </h3>";
$a = mt_rand(1,20);
$b = mt_rand(1,20);
echo "Числа: ".$a." и ".$b."<br/>";
echo "Сумма: ".mathOperation($a,$b,"sum")."<br/>";
echo "Вычесть: ".mathOperation($a,$b,"minus")."<br/>";
echo "Умножить: ".mathOperation($a,$b,"multiply")."<br/>";
echo "Разделить: ".mathOperation($a,$b,"division")."<br/>";
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "sum":
            return sum($arg1,$arg2);
            break;
        case "minus":
            return minus($arg1,$arg2);
            break;
        case "multiply":
            return multiply($arg1,$arg2);
            break;
        case "division":
            return division($arg1,$arg2);
            break;
    }
}
?>
<!--
// 5. Посмотреть на встроенные функции PHP. 
// Используя имеющийся HTML шаблон, 
// вывести текущий год в подвале при помощи встроенных функций PHP. -->
<?php

echo "<h3> Задание п.5. Авто-подстановка текущего года в футере сайта </h3>";
echo "<h4>Определяем текущий год из глобальной переменной getDate:<h4>";
$currentYear = getDate()["year"];
?>
<footer style="display:block; width:250px; height:30px; color:white; background-color:grey;">
<p style="margin:10px;">Copyright 2004-<?=$currentYear ?></p>
</footer>

<?php
// 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень. 
echo "<h3> Задание п.6: Возводим число в степень с помощью рекурсии</h3>";
$a = mt_rand(1,10);
$b = mt_rand(1,3);
echo "Число и степень: ".$a." и ".$b."<br/>";
echo "Результат: ".power($a, $b)."<br/>";
function power($number, $stepen) {
    if ($stepen<=1){return $number;}
    else return $number*power($number,$stepen-1);
}

// 7. *Написать функцию, которая вычисляет текущее время 
// и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты

echo "<h3> Задание п.7: Текущее время (МСК) с учетом склонения слов</h3>";
$hours = (date(H)+3);
$minutes = date(i);

$before_text_hours = " час";
$before_text_minutes = " минут";

function after_text_hours($hours) {
    if ($hours >= 2 && $hours <= 4) return "а";
    elseif ($hours >= 22 && $hours <= 24) return "а";
    elseif ($hours == 1 || $hours == 21) return "";
    else return "ов";
}
function after_text_minutes($Minutes) {
    if     ($Minutes >= 2 && $Minutes <= 4) return "ы";
    elseif ($Minutes >= 22 && $Minutes <= 24) return "ы";
    elseif ($Minutes >= 32 && $Minutes <= 34) return "ы";
    elseif ($Minutes >= 42 && $Minutes <= 44) return "ы";
    elseif ($Minutes >= 52 && $Minutes <= 54) return "ы";
    elseif ($Minutes == 1   || $Minutes == 21 || $Minutes == 31
                            || $Minutes == 41 || $Minutes == 51) return "а";
    else return "";
}

echo $hours. $before_text_hours. after_text_hours($hours). " "; //Выводит часы
echo $minutes. $before_text_minutes. after_text_minutes($minutes). "<br/>"; //Выводит минуты

// Тестирование склонения слов через цикл for
//for ($i=0; $i<=60; $i++) {
    //echo $i. $before_text_minutes. after_text_minutes($i). "<br/>"; //Выводит минуты
//}
?>