<?php

/**
 * Реализуйте функцию isBalanced(), которая принимает на вход строку, 
 * состоящую только из открывающих и закрывающих круглых скобок, и проверяет,
 *  является ли эта строка корректной. Пустая строка (отсутствие скобок) 
 * считается корректной.
 * 
 * Строка считается корректной (сбалансированной), если содержащаяся в 
 * ней скобочная структура соответствует требованиям:
 * 
 * Скобки — это парные структуры. У каждой открывающей скобки должна 
 * быть соответствующая ей закрывающая скобка.
 * Закрывающая скобка не должна идти впереди открывающей. Такой вариант 
 * недопустим )(, а вот такой допустим ()().
 */

function isBalanced($bracket)
{
    $stack = '';
    if (!empty($bracket)) {
        for ($i = 0; $i < strlen($bracket); $i++) {
            if ($bracket[$i] === '(') {
                $stack = $stack . '(';
            } elseif ($bracket[$i] === ')') {
                $stack = $stack . ')';
                $stack = str_replace('()', '', $stack);
            }
        }
    }
    if ((strlen($stack) === 0) || (empty($bracket))) {
        return true;
    } else {
        return false;
    }
}