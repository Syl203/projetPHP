<?php
    if(!isset($_POST["bouton-clic"])){
        header('Location:index.php');
    }
    $table = 6;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Table de multiplication</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="text-success">Table de multiplication de <?= $table ?></h3>
            <?php 
                
                for($i = 0; $i < 11; $i++){
                    $resultat = $i * $table;
                    echo "<ul class='list-group text-center'>
                            <li class='list-group-item text-success'> $i X $table = $resultat</li>
                        </ul>";
                }
            ?>

        </div>
        <div class="text-center">
            <a href="index.php" class="mt-3 btn btn-outline-danger">Retour</a>
        </div>
    </div>
</body>
</html>