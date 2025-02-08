  <?php
  
  $numeros = [1,2,3];
//serve para multiplicar o numero por 2
 $resultado = array_map(function($num){//para guardar o resultado 
    return $num*2;//retornar o numero multiplicado
  },$numeros);
//mostrar o resultado
  print_r($resultado);
  