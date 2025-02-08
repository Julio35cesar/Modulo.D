<?php

$array1 = ["Ola ","Bom "];
$array2 = ["Mundo","Dia" ];

$juntar = function($a,$b){//juntar as palavras 
    return$a."".$b;//retornar a palavra montada 
};

$resultado = array_map($juntar,$array1,$array2);//para organizar os resultados 

print_r($resultado);//mostrar o resultado pode ser var_dump