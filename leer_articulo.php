<?php

require 'Consultas.php';
session_start();
$id_usuario = null;
$comentarios = array();
$consultas = new ConsultasMysqli();

$id_articulo = $_GET['id'];
$articulo = $consultas->row("SELECT * from articulo where id_art = $id_articulo");

if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
}

if (isset($_POST["comentario"])) {
    $descripcion = $_POST["comentario"];
    $id_art = $id_articulo;
    $fecha = date('Y-m-d');
    $resultado = $consultas->query("INSERT INTO 
    comentarios(id_art,id_usuario, descripcion, fecha)
    values($id_art, $id_usuario, '$descripcion', '$fecha')");
    $_POST["comentario"] = null;

    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF'] . "?id=$id_articulo");
    exit;
}

if (isset($_POST["id_comentario"])) {

    $id_comentario = $_POST["id_comentario"];
    $consultas->query("DELETE FROM comentarios where id_coment = $id_comentario");
    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF'] . "?id=$id_articulo");
    exit;
}




if ($id_usuario != null) {
    $comentarios = $consultas->array("SELECT c.*, u.nombre_usu usuario 
    from comentarios as c 
    natural join usuarios u 
    where c.id_art = $id_articulo 
    order by fecha asc
    ");
}

?>
<!doctype html>
<html lang="es">

<head>
    <title>Leer Artículo</title>
    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/leer-articulo.css">
    <style>
        .card-comentario {
            border-radius: 20px;
            min-height: 100px;
            width: 100px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>



<body>
    <?php include("./templates/header.php") ?>

    <div class="container mt-5 mb-5">
        <div class="card text-white bg-dark">
            <img class="card-img-top" src="data:image/jpg;base64, <?= base64_encode($articulo['imagen']); ?>" alt="Imagen del artículo">
            <div class="card-body">
                <h4 class="card-title"><?= $articulo["Titulo"] ?> - <i>Escrito por <?= $articulo["autor"] ?></i></h4>
                <p class="card-text">
                    <?= $articulo["contenido"] ?>
                </p>
            </div>
        </div>
        <?php if ($id_usuario != null) { ?>
            <div class="mt-3 bg-white p-2">
                <form action="leer_articulo.php?id=<?= $id_articulo ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><b>Escribe un comentario</b></label>
                        <textarea required class="form-control" id="comentario" name="comentario" rows="2"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Comentar</button>
                </form>
            </div>
        <?php
        }
        ?>

        <div class="mt-4 bg-white p-2 pt-4">
            <h3 class="mb-2"><b>Comentarios</b></h3>
            <?php if (sizeof($comentarios) == 0) { ?>
                <div class="alert alert-info p-3 text-center" role="alert">
                    <strong>El artículo aún no tiene comentarios</strong>
                </div>
            <?php
            }
            ?>



            <?php foreach ($comentarios as $comentario) { ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title"><i><?= $comentario['usuario'] ?></i></h5>
                        <p class="card-text"><?= $comentario['descripcion'] ?></p>

                        <?php if ($id_usuario != null && $id_usuario == $comentario["id_usuario"]) { ?>
                            <div class="d-flex flex-row-reverse">
                                <form action="leer_articulo.php?id=<?= $id_articulo ?>" method="POST">
                                    <input type="hidden" name="id_comentario" value="<?= $comentario['id_coment'] ?>" />
                                    <button type="submit" class="btn btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        <?php } ?>

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