<?php

$palavras = ["ovo","slc","gremio","imortal","tricolor"];

$palavrasMaiuscula = fn($str) => strtoupper($str);

$palavras_maiusculas = array_map($palavrasMaiuscula,$palavras);

print_r($palavras_maiusculas);