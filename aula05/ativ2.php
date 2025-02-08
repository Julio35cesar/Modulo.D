<?php

function fatorial($numero){
    if($numero < 0){
        return"Nao existe fatorial de numero negativo";
    }

    $resultado = 1;

    for($i = 1 ; $i <= $numero; $i++){
        
    }
    
    return $resultado;
}
$numero = 8;
echo "O fatoria de $numero e ".fatorial($numero);