<?php

$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "PrograWeb";


$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

$correo = $_GET["correo"];
$password = $_GET["pass"];


$sql = "SELECT id_usuario,password,rol,correo,nombre_usu  from usuarios where correo='" . $correo . "'";
$result = mysqli_query($db, $sql);
$numero_filas = mysqli_num_rows($result);

if ($numero_filas == 0) {
	echo "El usuario que ingresaste es incorrecto";
	header("Location: login.php");
	die();
} else {

	$mostrar = mysqli_fetch_array($result);
	$rol = $mostrar['rol'];
	$nombre = $mostrar['nombre_usu'];
	$id_usuario = $mostrar['id_usuario'];
}
if ($password == $mostrar['password']) {
	session_start();
	$_SESSION["info"]["user"] = $correo;
	$_SESSION["info"]["rol"] = $rol;
	$_SESSION["id_usuario"] = $id_usuario;
	$_SESSION['user'] = $nombre;


	header("Location: home.php");
	die();
} else {
	echo "Contraseña incorrecta";
}
