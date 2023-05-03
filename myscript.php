<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";
// echo $_GET['bad'];
// echo $_GET['paragraph'];

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
        <div class="container py-5">
            <p>Paragraph = <?php echo $_GET['paragraph']; ?></p>
            <h5>Bad Word = <?php echo $_GET['bad']; ?></h5>
        </div>
    </div>

</body>

</html>