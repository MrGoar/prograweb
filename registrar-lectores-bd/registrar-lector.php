<?php



require '../consultas.php';
session_start();
$consultas = new ConsultasMysqli();


//conectamos Con el servidor
$conectar = mysqli_connect('localhost', 'root', '', 'prograweb');
//verificamos la conexion
if (!$conectar) {
  echo "No Se Pudo Conectar Con El Servidor";
}
//recuperar las variables
$id_usuario = $_POST["id_usuario"];
$nombre = $_POST['nombre'];
$apPaterno = $_POST['ap_paterno'];
$apMaterno = $_POST['ap_materno'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$temaInteres = $_POST['temas_interes'];
//hacemos la sentencia de sql
$sql = "INSERT INTO lectores VALUES (null,'$nombre','$apPaterno','$apMaterno','$correo','$edad','$temaInteres', $id_usuario)";
//ejecutamos la sentencia de sql
$ejecutar = mysqli_query($conectar, $sql);
//verificamos la ejecucion
if (!$ejecutar) {
  echo "Hubo Algun Error";
} else {


  $usuario_nuevo = $consultas->row("SELECT * FROM usuarios where id_usuario = $id_usuario");

  session_start();
  $_SESSION["info"]["user"]=$usuario_nuevo['correo'];			
  $_SESSION["info"]["rol"]=$usuario_nuevo['rol'];
  $_SESSION["id_usuario"]=$usuario_nuevo['id_usuario'];
  $_SESSION['user'] = $usuario_nuevo['nombre'];


  echo "<script>
  alert('Registro Exitoso! Bienvenido $nombre');
  window.location.href ='../articulos.php';
  </script>";
}
