<?php

/**
 * Реализуйте функцию fib(), находящую положительные числа Фибоначчи. 
 * Аргументом функции является порядковый номер числа.
 */

function fib($num)
{
    if ($num == 0) return 0;
    if ($num == 1 || $num == 2) {
        return 1;
    } else {
        return (fib($num - 1) + fib($num - 2));
    }
}