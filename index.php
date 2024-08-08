<?php 
include __DIR__ . '/function.php';
include __DIR__ . '/partials/head.php';

// array dei vari caratteri per generare le password
$characters_array = [
'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ', 
'0123456789',
'!?&%$<>^+-*/()[]{}@#_='
];

//array con tutti i caratteri insieme
$all_characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';

//se la lunghezza è stata inserita
if(isset($_GET['pswlength']) && !empty($_GET['pswlength'])) {
// ed è compresa fra 8 e 32
    if($_GET['pswlength'] >= 8 && $_GET['pswlength'] <= 32){
        //apre la sessione
        session_start();
        // genero la password
        $response = generateRandomPassword($_GET['pswlength'], $all_characters);
        // scrivo la psw nella sessione
        $_SESSION['response'] = $response;
        //reindirizzo alla pagina per mostrare la password
        header('Location: ./landing.php');
    }else{
        //se la password inserita non è compresa fra 8 e 32 allora esce questo messaggio di errore 
        $output = 'Errore inserisci un numero fra 8 e 32!!!';
    }
//se il valore della lunghezza del messaggio ancora non è stato inserito viene visualizzato il messaggio sottostante
} else{
    $output = 'Inserisci un numero fra 8 e 32 per generare una password random';
}

?>

<!-- body dell'html -->
<body class="d-flex align-items-center justify-content-center bg-light">
    <div class="container">
        <!-- titolo e sottotitolo -->
        <div class="text-center my-5">
            <h1 class="text-light">Strong Password Generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </div>
    
        <!-- testo che cambia quando viene visualizzata la psw generata -->
        <div class="text-white p-3 bg-success"> <?php echo $output ?></div>
      
        <form action="index.php" method="GET" class="bg-light p-3 my-4">
            <div class="mb-3">
                <span>Lunghezza password:</span>
                <input type="number" name="pswlength" value="pswlength"><br>
            </div>

            <div class="d-flex gap-4">
                <span>Consenti ripetizioni: </span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="allowRepetitions" value="1" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="allowRepetitions1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="allowRepetitions" value="0" id="flexRadioDefault2" >
                    <label class="form-check-label" for="allowRepetitions2">
                        No
                    </label>
                </div>
            </div>
            
            

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
        </div>
    </div>
</body>
</html>