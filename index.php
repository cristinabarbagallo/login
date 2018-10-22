<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <header>
       <h1>Hej <?= $_SESSION["username"]; ?></h1>
    </header>

    <h2>Login</h2>
    <form action="register.php" method="POST">
     <input type="text" name="username">
     <input type="text" name="password">
     <input type="submit" value="Register">
    </form>

    <h2>Login</h2>
    <form action="login.php" method="POST">
     <input type="text" name="username">
     <input type="text" name="password">
     <input type="submit" value="Login">
    </form>
    

</body>
</html>