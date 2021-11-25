<?php

require 'Consultas.php';
session_start();
$id_usuario = null;
$comentarios = array();
$consultas = new ConsultasMysqli();


if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
} else {
    header("Location: home.php");
}

if (isset($_POST["id_comentario"])) {

    $id_comentario = $_POST["id_comentario"];
    $consultas->query("DELETE FROM comentarios where id_coment = $id_comentario");
    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF'] . "?id=$id_articulo");
    exit;
}

$query = "SELECT c.*, a.Titulo publicacion, a.autor autor 
from comentarios as c 
inner join articulo a 
on c.id_art = a.id_art 
where c.id_usuario = $id_usuario
order by c.fecha desc
";

$comentarios = $consultas->array($query);



?>
<!doctype html>
<html lang="es">

<head>
    <title>Mis Artículo</title>
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
    <?php include("./templates/header.php") ?>

    <div class="container mt-5 mb-5">

        <div class="mt-4 bg-white p-2 pt-4">
            <h3 class="mb-2"><b>Mis Comentarios</b></h3>
            <?php if (sizeof($comentarios) == 0) { ?>
                <div class="alert alert-info p-3 text-center" role="alert">
                    <strong>Aún no has comentado</strong>
                </div>
            <?php
            }
            ?>



            <?php foreach ($comentarios as $comentario) { ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Comentario hecho en <i><?= $comentario['publicacion'] ?></i> de <i><?= $comentario['autor'] ?></i> </h5>

                        <p class="card-text">
                            <small>Fecha: <?= $comentario['fecha'] ?></small>
                            <br />
                            <br />
                            <?= $comentario['descripcion'] ?>
                        </p>

                        <div class="d-flex flex-row-reverse">
                            <form action="mis_comentarios.php" method="POST">
                                <input type="hidden" name="id_comentario" value="<?=$comentario['id_coment'] ?>" />
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>



                </div>
            <?php
            }
            ?>

        </div>
    </div>



    <!--FOOTER-->
    <?php include("./templates/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>