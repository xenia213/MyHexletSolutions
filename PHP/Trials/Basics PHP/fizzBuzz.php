<?php

/**
 * Реализуйте функцию fizzBuzz(), которая выводит на экран числа в диапазоне 
 * от $begin до $end. При этом:
 * 
 * Если число делится без остатка на 3, то вместо него выводится слово Fizz
 * Если число делится без остатка на 5, то вместо него выводится слово Buzz
 * Если число делится без остатка и на 3, и на 5, то вместо числа выводится слово FizzBuzz
 * В остальных случаях выводится само число
 * Функция принимает два параметра ($begin и $end), определяющих начало и 
 * конец диапазона (включительно). Если диапазон пуст (в случае, когда 
 * $begin > $end), то функция просто ничего не печатает.
 */

function fizzBuzz($begin, $end)
{
    $i = $begin;
    $result = '';
    if ($begin <= $end) {
        for (; $i <= $end; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $result = $result . 'FizzBuzz' . ' ';
            } elseif ($i % 5 === 0) {
                $result = $result . 'Buzz' . ' ';
            } elseif (($i % 3 === 0)) {
                $result = $result . 'Fizz' . ' ';
            } else {
                $result = $result . $i . ' ';
            }
        }
    }
    print ($result);
}