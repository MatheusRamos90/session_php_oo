<?php
require 'app/Login.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SESSION - PHP OO</title>
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
    </style>

</head>
<body>

<!-- container -->
<div class="container">

    <!-- login -->
    <div class="col-lg-4 col-md-4" style="float: none;margin: 20rem auto auto auto">
        <div class="panel panel-default login">
            <form method="post" id="form-login">
                <div class="panel-heading">
                    Login | SESSION - PHP OO
                </div>
                <div class="panel-body">
                    <input type="text" name="email" class="form-control" placeholder="E-mail">
                    <br/>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="panel-footer">
                    <div class="btns">
                        <button type="submit" name="btn-login" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        <?php

        $user = new Login();

        if(isset($_POST['btn-login'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(($email || $password) == null){

                echo $user->messageError('The fields are required.');

            }else{

                $user->setEmail($email);
                $user->setPassword($password);

                if($user->validateLogin($email,$password)){

                    return $this;

                }else{

                }
            }

        }

        ?>
    </div>

</div>
<!-- end container -->

</body>
</html>
