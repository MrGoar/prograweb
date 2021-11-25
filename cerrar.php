<?php include("./templates/header.php")?>

<?php


session_unset();
session_destroy();
header("Location: home.php");
				die();

?>