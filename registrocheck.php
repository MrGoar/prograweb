<?php

require 'Consultas.php';
session_start();
include("./templates/header.php")

?>

<body>
	<!--HEADER-->

	<br>
	<br>

	<!--Contenido-->
	<?php




	//Datos de formulario
	$correo = $_GET["correo"];
	$nombre = $_GET["name"];
	$contra = $_GET["pass"];
	$rol = $_GET["rol"];


	//Insercion
	function insert($correo, $name, $pass, $rol)
	{
	
		$consultas = new ConsultasMysqli();
		$sql = "INSERT INTO usuarios (nombre_usu,correo,password,rol) VALUES('$name','$correo','$pass','$rol')";
		$id_usuario_nuevo = $consultas->insert($sql);
		if (isset($id_usuario_nuevo)) {
			//Redireccion
			/* $usuario_nuevo = $consultas->row("SELECT * FROM usuarios where id_usuario = $id_usuario_nuevo");
		
			$_SESSION["info"]["user"]=$usuario_nuevo['correo'];			
			$_SESSION["info"]["rol"]=$usuario_nuevo['rol'];
			$_SESSION["id_usuario"]=$usuario_nuevo['id_usuario'];
			$_SESSION['user'] = $usuario_nuevo['nombre']; */
			if ($rol == 'Lector') {
				header("Location: registrar_lector_comentarios.php?id_usuario=$id_usuario_nuevo");
				die();
			} else {
				header("Location: registrarescritor.php?id_usuario=$id_usuario_nuevo");
				die();
			}
		} else {
			//Si no error
			echo "Error" . $sql;
			echo "Ocurrio un error";
		}
	}

	insert($correo, $nombre, $contra, $rol);





	?>



	<!--Footer-->
	<br>
	<br>
	<?php include("./templates/footer.php") ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>