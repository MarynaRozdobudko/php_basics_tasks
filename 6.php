<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.02.2018
 * Time: 18:49
 * 5. Напишите конструкцию if, которая выводит фразу:
 * "Вам еще работать и работать" при условии, что значение переменной age
 * попадает в диапазон чисел от 18 до 59 (включительно).
 * if  ( $condition ) {
 * // do something }
 * 6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии,
 * что значение переменной age больше 59.
 */

$age=62;

if ($age>=18 and $age<=59 ){
    echo "Вам еще работать и работать";
}

if ($age>59) {
    echo "Вам пора на пенсию";
}

?>