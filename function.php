<?php 

function generateRandomPassword($psw_length){
// array dei vari caratteri per generare le password
  $characters_array = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=";
  $randomPsw = '';
  $characters_length = strlen($characters_array);
  
  for($i = 0; $i < $psw_length; $i++ ){
    $randomPsw .= $characters_array[random_int(0, $characters_length - 1)];
  }
  return $randomPsw;
  }
