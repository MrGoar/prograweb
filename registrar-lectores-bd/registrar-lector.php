<?php
//conectamos Con el servidor
$conectar = mysqli_connect ('localhost', 'root','','prograweb');
//verificamos la conexion
if(!$conectar){
  echo "No Se Pudo Conectar Con El Servidor";
}
//recuperar las variables
$nombre=$_POST['nombre'];
$apPaterno=$_POST['ap_paterno'];
$apMaterno=$_POST['ap_materno'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$temaInteres=$_POST['temas_interes'];
//hacemos la sentencia de sql
$sql= "INSERT INTO lectores VALUES (null,'$nombre','$apPaterno','$apMaterno','$correo','$edad','$temaInteres')";
//ejecutamos la sentencia de sql
$ejecutar = mysqli_query ($conectar, $sql);
//verificamos la ejecucion
if(!$ejecutar){
  echo "Hubo Algun Error";
} else{
  echo "<script>
  alert('Registro Exitoso! Bienvenido $nombre');
  window.location.href ='../articulos.php';
  </script>";
}
?>