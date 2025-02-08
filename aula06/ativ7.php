<?php

$numeros = [1,2,3,4,5];

$cubo = fn($n) => $n **3;//por ao cubo

$numeros_cubos = array_map($cubo,$numeros);

print_r($numeros_cubos);