<?php

$numeros = [1,2,3,4,5];

$resultados = array_map(function($num){
    return $num*$num;
},$numeros);

print_r($resultados);
