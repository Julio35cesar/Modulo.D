<?php

$numeros = [-9,9,-22,15,-77,12];

$positivo = fn($n) => $n > 0; //ver se o numero e positivo se for maior que zero e positivo

$numeros_positivos =array_filter($numeros,$positivo);//filtrarn os numeros positivos

print_r($numeros_positivos);

