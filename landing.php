<?php
include __DIR__ . '/partials/head.php';

session_start();

//effettuo un controllo se la password è stata settata nella sessione allora la stampo altrimenti reindirizzo all'index.php
if(isset($_SESSION['response'])){
    $psw = $_SESSION['response'];
} else{
    header('Location: ./index.php');
}

?>

<body class="bg-dark">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="text-white">Ecco la tua password:</h1>
            <h3 class="text-white bg-success p-3"><?php echo $psw ?></h3>
            <a href="index.php" class="btn btn-primary">Torna al generatore</a>
        </div>
    </div>
</body>
</html>