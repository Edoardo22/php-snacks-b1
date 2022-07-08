<?php

/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

$numberList = [];

for ($i = 0; $i < 15; $i++) {
    $numero = rand(0, 100);
    if (!in_array($numero, $numberList)) {

        $numberList[] = $numero;
    } else {
        $i--;
    }
}
var_dump($numberList);
