<?php

function verificarParOuImpar($numero){
    return($numero % 2 ==0)?"Par" : "Impar";
}

$numero = 6;
echo"O numero $numero  é ".verificarParOuImpar($numero);

