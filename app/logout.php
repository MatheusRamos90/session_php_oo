<?php

session_start();

$_SESSION['logged']= false;

//destroy session
session_destroy();

//redirect to login
header('Location: ../index.php');
exit;