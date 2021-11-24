<?php
 require 'conexion.php';
 if(isset($_POST['guardar'])){
    $Nombre = $_POST['nombre'];
    $Ap_paterno = $_POST['ap_paterno'];
    $Ap_materno = $_POST['ap_materno'];
    $correo=$_GET["correo"];
    $Edad = $_POST['edad'];
    $Temas_interes = $_POST['temas_interes'];
    $Rfc = $_POST['rfc'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];
    $Bibliografia = $_POST['bibliografia'];
    $query = "INSERT INTO escritores(id_esc, nombre, apellido_pat, apellido_mat, edad, tema_int, RFC, direccion, telefono, bibliografia)
    VALUES (null,'$Nombre', '$Ap_paterno', '$Ap_materno',$correo, '$Edad', '$Temas_interes', '$Rfc', '$Direccion', '$Telefono', '$Bibliografia')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        echo $resultado;
    }
    
    header("location: ../home.php");
}
?>