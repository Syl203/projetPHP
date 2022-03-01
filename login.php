<?php
session_start();
define('EMAIL', '96b1578af464fd1eb5a91920b37a4f06583464c4');
define('PASSWORD', 'f825b791d1a55e48d57aef583d2fec43c04e57ce');

if(isset($_GET["session"])){
    if($_GET["session"] == "destroy"){
        session_destroy();
        header("Location:index.php");
    }
}

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(sha1($email) === EMAIL && sha1($pass) === PASSWORD){
        echo "Vous êtes connecté";
        $_SESSION["connect"] = array();
        header("Location:index.php");
    }else{
        header("Location:index.php");
    }
}
?>