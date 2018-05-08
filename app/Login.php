<?php

require 'datasLogin.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 1 );

class Login extends datasLogin{

    protected $table = 'users';

    public function validateLogin($email,$password){

        $sql = "SELECT id,email,password FROM $this->table WHERE email = :email AND password = :password";
        $stm = DB::prepare($sql);
        $stm->bindParam(':email',$email);
        $stm->bindParam(':password',$password);
        $stm->execute();
        $users = $stm->fetchAll(PDO::FETCH_ASSOC);
        $user = $users[0];

        if($user == null){

            echo $this->messageError('User not found.');

        }else{

            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['id_user_session'] = $user['id'];
            header('Location: panel.php');

        }

    }

    public function messageSuccess($msg){

        return "<p class='alert alert-success alert-dismissible' style='float: none;margin: auto' role='alert'><strong>Success!</strong> ".$msg." <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></p>";

    }

    public function messageError($msg){

        return "<p class='alert alert-danger alert-dismissible' style='float: none;margin: auto' role='alert'><strong>Error!</strong> ".$msg." <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></p>";

    }

}