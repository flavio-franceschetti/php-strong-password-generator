<?php 

// funzione per generare la password random prendendo come parametri una lunghezza e una lista di caratteri
function generateRandomPassword($psw_length, $charList){
  // variabile per innserire la password generata
  $randomPsw = '';
  //ciclo basato sulla lunghezza della password che deve essere inserita dall'utente
  while(strlen($randomPsw) < $psw_length){
    $character = getRandomChar($charList);

    $randomPsw .= $character;
  }
  //la funzione ritorna la password generata
  return $randomPsw;
  }


  function getRandomChar($charList){
    return $charList[rand(0, strlen($charList) - 1)];
  }