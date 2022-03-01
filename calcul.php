<?php

if(isset($_POST) && !empty($_POST)){
    $reponse = $_POST["reponseMultiplication"];
    $resultat = $_POST["resultatMultiplication"];

    if($reponse == $resultat){
        echo 'Bravo !';
    }
    else{
        echo ' Vous êtes nul !';
    }
}

?>