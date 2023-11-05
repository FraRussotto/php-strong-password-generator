<?php


function psw_generator($length){
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567891?8%$^+-*/0)[]{}@#_=';
  $psw = '';
  
  for($c = 0; $c < $length; $c++){
    //con un indice random vado a pescare i caratteri all'interno della variabile 'str_shuffle($chars)' in modo da ottenere una sequenza randomica
    $index = rand(0, strlen(str_shuffle($chars)) - 1);
    $char = $chars[$index];
    $psw .= $char;
  }

  return $psw;
}

?>