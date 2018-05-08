<?php

function verifyLogin(){

    if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
        return false;
    }
    return true;

}

function nameUserLogged($id){

    $take_val = "SELECT name FROM users WHERE id = :id";
    $sql_user = DB::prepare($take_val);
    $sql_user->bindParam(':id',$id);
    $sql_user->execute();
    $res_user = $sql_user->fetchAll(PDO::FETCH_ASSOC);
    foreach($res_user as $user){
        $name = $user['name'];
        return $name;
    }

}