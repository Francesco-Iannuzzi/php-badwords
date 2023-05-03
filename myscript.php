<?php

echo "<pre>";

var_dump($_GET);
$badWord = $_GET['bad'];
$text = $_GET['paragraph'];

echo "</pre>";

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
        <h1 class="text-center">Hello PHP pag.2</h1>
        <div class="container d-flex flex-column align-items-center gap-5 py-5">
            <div class="card bg-secondary text-light border border-5 border-primary w-50 p-5">
                <p><strong>Paragrapg =</strong> <?php echo $text ?></p>
                <span><strong>Length of Paragraph =</strong> <?php echo strlen($text) ?></span>
                <div class="text-center pt-5">
                    <h5>Bad Word = <?php echo $badWord ?></h5>
                </div>
            </div>
            <!-- /card 1 -->
            <div class="card bg-secondary text-light border border-5 border-danger w-50 p-5">
                <p><strong>Paragraph =</strong> <?php echo $text ?></p>
                <span><strong>Length of Paragraph =</strong> <?php echo strlen($text) ?></span>
            </div>
            <!-- /card 2 -->
        </div>
    </div>

</body>

</html>