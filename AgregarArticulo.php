<?php
ob_start();
?>


<?php include("db.php") ?>
<!doctype html>
<html lang="es">


<head>
    <title>Agregar articulo</title>
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
    <?php

    if (isset($_REQUEST['Guardar'])) {
        if (isset($_FILES['foto']['name'])) {
            $tipoArchivo = $_FILES['foto']['type'];
            $nombreArchivo = $_FILES['foto']['name'];
            $tamanoArchivo = $_FILES['foto']['size'];
            $imagenSubida = fopen($_FILES['foto']['tmp_name'],'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
        }
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $Date = date('Y-m-d');

        $contenido = $_POST['contenido'];
        $categoria = $_POST['categoria'];
        $subcategoria = $_POST['subcategoria'];

        $query = "INSERT INTO articulo(Titulo, autor, imagen, fecha, contenido, categoria, subcategoria) 
    VALUES ('$titulo', '$autor', '$binariosImagen','$Date' , '$contenido','$categoria', '$subcategoria' )";
        $result = mysqli_query($conn, $query);


        if (!$result) {
            die("Query Failed.");
        }
     header('Location: articulos.php');
     exit();
    }
    ?>
    <div>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">


                    <form function="articulos.php" method="post" enctype="multipart/form-data">


                        <div class="form-grup">
                            <input type="file" class="form-control-file" name="foto" style="margin: 1em  ">
                        </div>





                        <div class="form-group">
                            <input type="text" style=" text-align: center; width: 60rem; margin: 1em  " name="titulo" class="form-control" placeholder="Agrega un titulo para tu articulo" autofocus>

                        </div>




                        <div class="form-group">
                            <textarea style="height: 30em ;  width: 60em; margin: 1em" name="contenido">Escribe contenido</textarea>
                        </div>


                        <div>
                            <h3>Datos del articulo</h3>
                            <div class="form-group">
                                <input type="text" style=" margin: 1em; width: 300px;  " name="autor" class="form-control" placeholder="Escribe tu nombre escritor" autofocus>
                            </div>



                            <div class="form-group">
                                <input type="text" style="  margin: 1em; width: 300px;  " name="categoria" class="form-control" placeholder="Asignale una categoria a tu articulo" autofocus>

                            </div>




                            <div class="form-group">
                                <input type="text" style="margin: 1em; width: 300px;  " name="subcategoria" class="form-control" placeholder="Asignale una subcategoria a tu articulo" autofocus>

                            </div>

                            <div class="form-group">
                                <h5>Fecha de creacion</h5>
                                <?php
                                $Date = date('Y-m-d');
                                echo " $Date.";
                                ?>
                            </div>

                            <div class="form-group">
                                <button  href="\ComentariosArticulo.php"  type="submit" name="Guardar" class="btn btn-success btn-block; ">Guardar</button>
                            </div>
                    </form>

                </div>
            </div>
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