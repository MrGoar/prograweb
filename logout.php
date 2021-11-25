<?php

session_start();


if(!isset($_SESSION['info'])){
    header("Location: home.php");
}

unset($_SESSION['info']);
unset($_SESSION['id_usuario']);
unset($_SESSION['user']);
header("Location: login.php");
?>
