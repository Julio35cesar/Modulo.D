<?php

$palavras = ["PlayStation","Xbox","Nintendo","Abacate","Ovo"];

usort($palavras,function($a,$b){//para ver a ordem dependendo do comprimento
    return strlen($a) -  strlen($b);//para ver o comprimento das string excluindo caracterez nulo 
});

print_r($palavras);