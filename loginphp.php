<?php
session_start();
$user = "bernal";
$pass = "1234";
$message = "";

if(isset($_POST["user"]) && isset($_POST["pass"])){

    if($_POST["user"] == $user && $_POST["pass"] == $pass){
        $message = "Correct Login";
        $_SESSION["user"] = $user;
        header("Location: index1.php");
       
    } else {
$message = "The login was fail"; 

    }
}
?>