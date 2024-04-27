<?php require "loginphp.php"?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href= "style.css"> 
</head>
<body>



<div class="login">    
  
    <div class= "form">
        <h2>Login form:</h2>
        <form method="POST" actcion="login.php" >
        User: <br><input type="text" name="user">
        <br>
        Password: <br><input type="password" name="pass">
        <br>
        
        <input type="submit" value= "Login" >
        <br>
        <?php echo $message;?>
        </form>
    </div>
</div>

</body>

</html>