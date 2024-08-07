<?php 
include __DIR__ . '/function.php';
include __DIR__ . '/partials/head.php';

if(isset($_GET['pswlength']) && !empty($_GET['pswlength'])) {

    if($_GET['pswlength'] >= 8 && $_GET['pswlength'] <= 32){
        session_start();
        $response = generateRandomPassword($_GET['pswlength']);
        $_SESSION['response'] = $response;
        header('Location: ./landing.php');
    }else{
        $output = 'Errore inserisci un numero fra 8 e 32!!!';
    }

} else{
    $output = 'Inserisci un numero fra 8 e 32 per generare una password random';
}

?>

<!-- body dell'html -->
<body class="d-flex align-items-center justify-content-center bg-dark">
    <div class="container">
        <!-- titolo e sottotitolo -->
        <div class="text-center my-5">
            <h1 class="text-light">Strong Password Generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </div>
    
        <!-- testo che cambia quando viene visualizzata la psw generata -->
        <div class="text-white p-3 bg-success"> <?php echo $output ?></div>
      
        <form action="index.php" method="GET" class="bg-light p-3 my-4">
            <span>Lunghezza password:</span>
            <input type="number" name="pswlength" value="pswlength"><br>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
        </div>
    </div>
</body>
</html>