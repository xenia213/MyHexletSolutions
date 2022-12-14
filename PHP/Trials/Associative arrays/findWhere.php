<?php

/**
 * Реализуйте функцию findWhere, которая принимает на вход массив 
 * (элементы которого - ассоциативные массивы) и пары ключ-значение 
 * (тоже в виде массива), а возвращает первый элемент исходного массива, 
 * значения которого соответствуют переданным парам (всем переданным). 
 * Если совпадений не было, то функция должна вернуть null.
 */

function findWhere($list, $meaning)
{
    $result = [];
    foreach ($list as $key) {
        if (array_intersect($meaning, $key) === $meaning) {
            $result [] = $key;
        }
    } if (sizeof($result) === 0) {
        return null;
    } return $result[0];
}