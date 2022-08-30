<?php

/**
 * "Счастливым" называют билет с номером, в котором сумма первой половины 
 * цифр равна сумме второй половины цифр. Номера могут быть произвольной 
 * длины, с единственным условием, что количество цифр всегда чётно, 
 * например: 33 или 2341 и так далее.
 * 
 * Билет с номером 385916 — счастливый, так как 3 + 8 + 5 = 9 + 1 + 6. 
 * Билет с номером 231002 не является счастливым, так как 2 + 3 + 1 != 0 + 0 + 2.
 * Реализуйте функцию isHappy, проверяющую является ли номер 
 * счастливым (номер — всегда строка). Функция должна возвращать true, 
 * если билет счастливый, или false, если нет.
 */

function isHappy($num)
{
    $len_num = strlen($num);
    $j = ($len_num / 2);
    $left_sum = 0;
    $right_sum = 0;

    for ($i = 0; $i < $len_num / 2; $i++) {
        $left_sum += $num[$i];
    }
    for (; $j < $len_num; $j++) {
        $right_sum += $num[$j];
    }
    if ($left_sum === $right_sum) {
        return true;
    } else {
        return false;
    }
}