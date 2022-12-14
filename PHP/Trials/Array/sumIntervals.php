<?php

/**
 * Реализуйте функцию sumIntervals, которая принимает на вход массив интервалов 
 * и возвращает сумму всех длин интервалов. В данной задаче используются только 
 * интервалы целых чисел от -100 до 100 , которые представлены в виде массива. 
 * Первое значение интервала всегда будет меньше, чем второе значение. Например, 
 * длина интервала [-100, 0] равна 100, а длина интервала [5, 5] равна 0. 
 * Пересекающиеся интервалы должны учитываться только один раз.
 */

function sumIntervals($intervals)
{
    $sum = 0;
    for ($i = -100; $i <= 100; $i++) {
        foreach ($intervals as $interval) {
            $num = ($i >= $interval[0]) && ($i < $interval[1]);
            if ($num && ($interval[0] != $interval[1])) {
                $sum++;
                break;
            }
        }
    }
    return $sum;
}