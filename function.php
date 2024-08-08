<?php 

// funzione per generare la password random prendendo come parametri una lunghezza e una lista di caratteri
function generateRandomPassword($psw_length, $charList, $characters_index){
  // variabile per innserire la password generata
  $randomPsw = '';

  // controllo che la lunghezza dei caratteri da estrarre non sia più lunga della lista selezionata dei caratteri in $characters_array
  $length = 0;
  // eseguo un ciclo forEach sugli indici per recuperare la lunghezza totale di ogni indice tramite strlen
  foreach($characters_index as $charIndex){
    // uso l'operatore += perché stiamo usando numeri solo numeri qundi non si usa il "."
    $length += strlen($charList[$charIndex]);
  }
  //creo una condizione per la quale se la lunghezza della password inserita dall'utente è maggiore della stringa selezionata nell'array la lunghezza inserita dall'utente diventa automaticamente la lunghezza massima della stringa dell'array
  if($psw_length > $length){
    $psw_length = $length;
  }


  //ciclo basato sulla lunghezza della password che deve essere inserita dall'utente
  while(strlen($randomPsw) < $psw_length){
    $character = getRandomChar($charList, $characters_index);
    //aggiungo la condizione se allowrepetitions è true o se $randomPsw contiene $character allora aggiungi la lettera a $randomPsw
    if($_GET['allowRepetitions'] || !str_contains($randomPsw, $character)){
      $randomPsw .= $character;
    } 
  }
  //la funzione ritorna la password generata
  return $randomPsw;
  }


  function getRandomChar($charList, $characters_index){
    //estraggo l'indice randomico da cui prendere il carattere nell'array $characters_array
    $array_index = $characters_index[rand(0, count($characters_index) - 1)];
    //attraverso l'indice seleziono la stringa dalla quale prendere il carattere
    $charString = $charList[$array_index];

    // ritorna un numero casuale fra 0 alla lunghezza della stringa di caratteri selezionata
    return $charString[rand(0, strlen($charString) - 1)];
  }