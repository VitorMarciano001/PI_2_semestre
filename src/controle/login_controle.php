<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];

    $correctEmail = "marmitaria.fit@contato.com";
    $correctPassword = "Marmita@123";

    if($email == $correctEmail && $correctPassword == $passwd){
        header("Location: ../paginas/homepage/home_page.php");
        exit;
    }else{
        header("Location: ../index.php");
        exit;
    }

}

?>