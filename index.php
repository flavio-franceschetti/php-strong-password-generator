<?php 
include __DIR__ . '/partials/head.php';

// array dei vari caratteri per generare le password
$characters_array = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=";

// Recupera il valore della lunghezza della password dal parametro GET
$psw_length = isset($_GET['pswlength']) ? (int)$_GET['pswlength'] : null;
// var_dump($psw_length)

function radomPassword(){

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
        <div class="text-white p-3 bg-success">Generare una password di lunghezza compresa fra 8 e 32</div>

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