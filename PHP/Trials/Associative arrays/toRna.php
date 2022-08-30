<?php

/**
 * ДНК и РНК это последовательности нуклеотидов.
 * Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).
 * Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).
 * Цепь РНК составляется на основе цепи ДНК последовательной заменой 
 * каждого нуклеотида:
 * 
 * G -> C
 * C -> G
 * T -> A
 * A -> U
 * 
 * Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает 
 * соответствующую цепь РНК (совершает транскрипцию РНК).
 */

function toRna($dnk)
{
    $rnk = [];
    $swap = [
        "G" => "C",
        "C" => "G",
        "T" => "A",
        "A" => "U"
    ];
    $dnk = str_split($dnk);
    foreach ($dnk as $letter) {
        foreach ($swap as $key => $value) {
            if ($letter === $key) {
                array_push($rnk, $value);
            }
        }
    }
    return (implode('', $rnk));
}