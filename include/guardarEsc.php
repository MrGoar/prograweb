<?php
require 'conexion.php';
require '../consultas.php';
session_start();
$consultas = new ConsultasMysqli();


if (isset($_POST['guardar'])) {
    $id_usuario = $_POST['id_usuario'];
    $Nombre = $_POST['nombre'];
    $Ap_paterno = $_POST['ap_paterno'];
    $Ap_materno = $_POST['ap_materno'];
    $correo = $_POST["correo"];
    $Edad = $_POST['edad'];
    $Temas_interes = $_POST['temas_interes'];
    $Rfc = $_POST['rfc'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];
    $Bibliografia = $_POST['bibliografia'];
    $query = "INSERT INTO escritores(nombre, apellido_pat, apellido_mat, correo, edad, tema_int, RFC, direccion, telefono, bibliografia, id_usuario)
    VALUES ('$Nombre', '$Ap_paterno', '$Ap_materno','$correo', '$Edad', '$Temas_interes', '$Rfc', '$Direccion', '$Telefono', '$Bibliografia', $id_usuario)";
    
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        echo $result;
        die();
    }


    $usuario_nuevo = $consultas->row("SELECT * FROM usuarios where id_usuario = $id_usuario");

    session_start();
    $_SESSION["info"]["user"] = $usuario_nuevo['correo'];
    $_SESSION["info"]["rol"] = $usuario_nuevo['rol'];
    $_SESSION["id_usuario"] = $usuario_nuevo['id_usuario'];
    $_SESSION['user'] = $usuario_nuevo['nombre'];

    header("location: ../home.php");
}
