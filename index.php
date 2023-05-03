<?php
/*

Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

1) Il primo file (index.php) dovrà permettere all’utente di inserire i dati (tramite un form) e inviare la richiesta al server.

2)Il secondo file (nome a piacere) riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

Consigli:
per lo svolgimento vi occorretanno:
- due file, index.php e myscript.php
- un form in index.php con gli attributi action e method
- due campi nel form, per inviare paragrafo e parola da censurare (ricordatevi di usare l'attributo name )
- ricercare metodo php per sostituire una porzione di una stringa (prova a googlare: string replace in php)
- ricercare un metodo php per contare la lunghezza di una stringa (prova a googlare string.length in php).

*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap style -->
    <title>PHP Badwords</title>
</head>

<body>

    <div class="container py-5">
        <h1 class="text-center">Hello PHP pag.1</h1>
        <form action="myscript.php" method="GET">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Paragraph</label>
                <textarea class="form-control w-50" name="paragraph" id="paragraph" rows="3" placeholder="Insert a paragraph"></textarea>
            </div>
            <!-- /textarea -->
            <div class="mb-3">
                <label for="bad" class="form-label">Bad Word!</label>
                <input type="text" class="form-control w-25" name="bad" id="bad" placeholder="Insert a bad word">
            </div>
            <!-- /bad word -->

            <div class="d-flex gap-4">
                <button type="submit" class="btn rounded-4 btn-primary">Submit</button>
                <button type="reset" class="btn rounded-4 btn-secondary">Reset</button>
            </div>
            <!-- /buttons -->
        </form>
    </div>

</body>

</html>