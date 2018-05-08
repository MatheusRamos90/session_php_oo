<?php
session_start();
require 'app/DB.php';
require 'functions/functions.php';

if(!verifyLogin()){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel | SESSION - PHP OO</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Calibri';
        }
        p, h1, h2, h3, h4, h5, h6{
            color: #333;
        }
        a{
            text-decoration: none;
            color: #333;
        }
    </style>

</head>
<body>

<div class="container">

    <nav class="navbar-default" role="navigation">
        <ul class="nav navbar-nav">
            <li><a>Hello, <span style="color: steelblue;font-size: 110%;font-weight: bold"><?php echo nameUserLogged($_SESSION['id_user_session']) ;?></span></a></li>
            <li><a href="app/logout.php">Logout</a></li>
        </ul>
    </nav>

</div>

</body>
</html>

