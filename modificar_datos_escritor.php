<?php
require 'Consultas.php';
session_start();
$consultas = new ConsultasMysqli();

$id_usuario = null;

if (isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];
} else if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
}

if (isset($_POST["temas_interes"])) {
  
    $tema = $_POST["temas_interes"];
    $bibliografia = $_POST["bibliografia"];
    $telefono = $_POST["telefono"];

    $query = "UPDATE escritores 
    SET tema_int = '$tema', 
    bibliografia = '$bibliografia',
    telefono = '$telefono'
     WHERE id_usuario = $id_usuario ";
     echo $query;
    $consultas->query($query);

    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
$usuario_nuevo = $consultas->row("SELECT * FROM usuarios where id_usuario = $id_usuario");

$escritor = $consultas->row("SELECT * from escritores where id_usuario = $id_usuario");


?>

<!doctype html>
<html lang="es">

<head>
    <title>Modificar datos escritor</title>
    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <!--HEADER-->
    <?php include("./templates/header.php") ?>

    <div class="text-center">
        <h1 aling="center"><b><i>Moficación datos Escritor</i></b></h1>
        <hr class="my-4">
    </div>


    <div class="container-fluid" id="contenedor1">
        <div>
            <img class="d-none d-md-block" src="img/user.png" alt="Imagen de usuario" width=150 height=150>
        </div>

        <div class="container" id="contenedor">
            <h4>Por favor, introduzca los siguientes datos para crear su perfil.</h4><br>
            <div class="panel" id="panel3">
                <h4></h4>
            </div>
            <form method="POST" action="modificar_datos_escritor.php" class="was-validated">
                <div class="form-group">
                    <label for="uname">Nombre</label>
                    <input readonly value="<?= $escritor['nombre'] ?>" type="text" class="form-control" id="uname" placeholder="Nombre" name="nombre" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Apellido paterno</label>
                    <input readonly value="<?= $escritor['apellido_pat'] ?>" type="text" class="form-control" id="ap_paterno" placeholder="Apellido paterno" name="ap_paterno" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Apellido materno</label>
                    <input readonly value="<?= $escritor['apellido_mat'] ?>" type="text" class="form-control" id="ap_materno" placeholder="Apellido materno" name="ap_materno" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Edad</label>
                    <input readonly value="<?= $escritor['edad'] ?>" type="text" class="form-control" id="edad" placeholder="Edad" name="edad" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Temas de interés</label>
                    <input value="<?= $escritor['tema_int'] ?>" type="text" class="form-control" id="temas_interes" placeholder="Temas de interés" name="temas_interes" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">RFC</label>
                    <input readonly value="<?= $escritor['RFC'] ?>" type="text" class="form-control" id="rfc" placeholder="rfc" name="rfc" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Direccion</label>
                    <input type="text" readonly value="<?= $escritor['direccion'] ?>" class="form-control" id="direccion" placeholder="direccion" name="direccion" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Telefono</label>
                    <input type="text" value="<?= $escritor['telefono'] ?>" class="form-control" id="telefono" placeholder="telefono" name="telefono" required>
                    <div class="valid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="uname">Bibliografia</label>
                    <input type="text" value="<?= $escritor['bibliografia'] ?>" class="form-control" id="bibliografia" placeholder="bibliografia" name="bibliografia" required>
                    <div class="valid-feedback"></div>
                </div>


                <button type="submit" class="btn btn-success btn-block" name="guardar" id="btnform">Guardar</button>
            </form>
        </div>

    </div>

    <!--FOOTER-->
    <?php include("./templates/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>