<?php

/**
 * Реализуйте функцию play(), которая выводит на экран горизонтальную гистограмму. Функция принимает на вход 
 * количество бросков кубика и функцию, которая имитирует бросок игральной кости (её реализовывать не нужно). 
 * Вызов этой функции генерирует значение от 1 до 6, что соответствует одной из граней игральной кости.
 *
 * Гистограмма содержит строки, каждой из которых соответствует грань игральной кости и количество выпадений 
 * этой грани. Результаты отображаются графически (с помощью символов #) и в виде числового значения, за 
 * исключением случаев, когда количество равно 0 (нулю).
 */

function play($num, $roll)
{
    $results = [0, 0, 0, 0, 0, 0];

    for ($i = 0; $i < $num; $i++) {
        $res = $roll();
        $results[$res - 1]++;
    }

    $repeat = array_map(function ($key, $result) {
        $k = $key + 1;
        if ($result !== 0) {
            return $k."|".str_repeat("#", $result).' '.$result;
        } else {
            return $k."|";
        }
    }, array_keys($results), $results);

    print_r(implode("\n", $repeat));
}

$rollDie = function () {
    return rand(1, 6);
};
play(13, $rollDie);
    // 1|########################## 26
    // 2|######### 9
    // 3|############ 12
    // 4|###################### 22
    // 5|############ 12
    // 6|################### 19