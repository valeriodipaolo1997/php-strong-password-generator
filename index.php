<?php

/* 
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/

//var_dump($_GET['password_length']);

include __DIR__ . '/partials/functions.php'


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>



    <div class="container mt-4">
        <form method="get" class="d-flex align-items-center justify-content-center gap-3">
            <label for="password_length" class="form-label">scegli un numero da 1 a 40</label>
            <input type="number" class="form-control" name="password_length" id="password_length" aria-describedby="helpId" placeholder="0" style="width: 70px;">
            <button type="submit" class="btn btn-success">Generate</button>
        </form>
    </div>
    <!-- /.container -->

    <div class="container mt-4">

        <?php if (isset($password) && $password !== null && $password !== '') : ?>

            <div class="alert alert-warning" role="alert">
                <strong>Password:</strong> <?= $password ?>
            </div>

        <?php endif ?>

    </div>
    <!-- /.container -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>