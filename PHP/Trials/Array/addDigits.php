<?php

/**
 * Реализуйте функцию addDigits(), которая принимает на вход неотрицательное 
 * целое число и возвращает другое число, полученное из первого следующим 
 * преобразованием: Итеративно сложите все входящие в него цифры до тех пор 
 * пока, не останется одна цифра.
 * 
 * Для числа 38 процесс будет выглядеть так:
 * // 38 состоит из двух цифр, складываем их
 * 3 + 8 = 11 // результат сложения тоже состоит из двух цифр, поэтому складываем их
 * 1 + 1 = 2 // результат это одна цифра, возвращаем ее
 */

function addDigits($num)
{
    $numStr = array_sum(str_split($num));
    if ($numStr >= 9) {
        $numStr = array_sum(str_split($numStr));
        return $numStr;
    } else {
        return $numStr;
    }
}