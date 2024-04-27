<?php
session_start();
if(!isset($_SESSION["user"])){
header("Location: login.php");
}

if(isset($_POST["logout"])){
session_unset();
session_destroy();
header("Location: login.php");
exit;
}
?>