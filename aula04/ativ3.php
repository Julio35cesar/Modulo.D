<?php

$frutas = ["banana","maça","uva","morango"];

$precos =[2.50,3.00,5.50,7.99];

$frutas_precos = array_combine($frutas,$precos);

var_dump($frutas_precos);

?>