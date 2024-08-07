<?php 

// funzione per generare la password random prendendo come parametri una lunghezza e una lista di caratteri
function generateRandomPassword($psw_length, $charList){
  // variabile per innserire la password generata
  $randomPsw = '';
  //a $characters_lenght viene assegnata la lunghezza della lista di caratteri per l'estrazione casuale
  $characters_length = strlen($charList);
  //ciclo basato sulla lunghezza della password che deve essere inserita dall'utente
  while(strlen($randomPsw) < $psw_length){
    $randomPsw .= $charList[rand(0, $characters_length - 1)];
  }
  //la funzione ritorna la password generata
  return $randomPsw;
  }
