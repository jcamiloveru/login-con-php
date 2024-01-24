<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestra empresa.</h1>
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambiar contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cerrar la sesión</a>
        <br><br><h2>Clic en el logo, cargar el blog <a href="https://rojastobias.blogspot.com/"><img src="images/configuroweb.png" width="170"></a>
        <br><br><iframe width="560" height="315" src="https://rojastobias.blogspot.com/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>


</body>
</html>