<?php
session_start();

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
    <title>PROJET PHP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="multiplication.php" method="post">
                <button type="submit" name="bouton-clic" class="btn btn-primary" >Table de multiplication</button>
            </form>

            <form action="choixTable.php" method="post">
                <label for="valeur">Choisir une table</label>
                <select name="valeur" id="valeur">
                    <?php
                    for($i=1;$i<=10;$i++){
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select><br />
                <button type="submit" name="bouton" class="btn btn-primary">Choix du multiplicateur</button>
            </form>

            <form action="checkbox.php" method="post">
                <?php for($i=1;$i<=10;$i++){

                     echo "<input type=\"checkbox\" value=\"$i\" name=\"tableau[]\">";
                     echo "<label for=\"$i\">$i</label>&nbsp;&nbsp;";       
                }
                ?><br>
                <button type="submit" name="bouton" class="btn btn-primary">Choix multiple</button>
            </form>

            <form method="post" action="calcul.php">
                <?php
                $nombreTab = array(1,2,3,4,5,6,7,8,9,10);
                $multipleTab = array(1,2,3,4,5,6,7,8,9,10);
                $nombre = array_rand($nombreTab);
                $multiple = array_rand($multipleTab);
                $resultatMultiplication = $nombre * $multiple;
                ?>
                <label for="reponseMultiplication">
                    <?php echo $nombre . " X " . $multiple . " ?" ;?>
                </label> <br>
                <input type="number" name="reponseMultiplication" /><br><br>
                <input type="hidden" value="<?= $resultatMultiplication ?>" name="resultatMultiplication">
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>

            <h2>Formulaire de connexion 
                <span class="connect"> <?php if(isset($_SESSION["connect"])){
                echo "<a href='login.php?session=destroy'>déconnexion</a>"; } ?>
                </span>
            </h2>
            <?php if(!isset($_SESSION["connect"])){ ?>
            <form action="login.php" method="post">
                <label for="email">Votre email</label><br>
                <input type="email" name="email"><br><br>
                <label for="password">Votre password</label><br>
                <input type="password" name="password"><br><br>
                <input type="submit" value="envoyer" class="btn btn-primary">
            </form>
            <?php } else{
                echo "<p>Vous êtes connecté</p>" ;
            }
            ?>
        </div>
    </div>
</body>
</html>