<?php include("db.php");
$Titulo = "";
$Autor = "";
$Imagen = "";
$Fecha = "";
$Contenido = "";
$Categoria = "";
$Subcategoria = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM articulo WHERE id_art=$id";
    $result = mysqli_query($conn, $query);
    if (!empty($result) and mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Titulo = $row['Titulo'];
        $Autor = $row['autor'];
        $Imagen = $row['imagen'];
        $Fecha = $row['fecha'];
        $Contenido = $row['contenido'];
        $Categoria = $row['categoria'];
        $Subcategoria = $row['subcategoria'];
    }
}

  
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "prograweb";  
$db = new mysqli($servidor,$usuarioBD,$pwdBD,$nomBD);  
$query = mysqli_query($db, "SELECT  descripcion, fecha FROM comentarios ");

?>

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

    if (isset($_POST['Comentar'])) {


        
        $descripcion = $_POST['descripcion'];
        $Date = date('Y-m-d');

        $query = "INSERT INTO comentarios(descripcion, fecha)  VALUES ('$descripcion','$Date' )";
        $result = mysqli_query($conn, $query);


        if (!$result) {
            die("Query Failed.");
        }
    }

    ?>

    <div>
        <div class="container p-2">
            <div class="row">
                <div class="col-md-8">


                    <div class="text-center">
                        <h1 aling="center"><b><i>Contenido de articulo</i></b></h1>
                        <hr class="my-4">
                    </div>

                    <form action="ComentariosArticulo.php" method="POST">
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="Card image cap">
                        <div class="form-group">
                            <h2><?php echo $Titulo; ?></h2>
                        </div>
                        <div class="form-group">
                            <h4><?php echo $Autor; ?></h4>
                        </div>
                        <div class="form-group">
                            <h3><?php echo $Contenido; ?></h3>
                        </div>

                        <div class="form-group">
                            <h5><?php echo $Fecha; ?></h5>
                        </div>
                        <div class="form-group">
                            <h5><?php echo $Categoria; ?></h5>
                        </div>
                        <div class="form-group">
                            <h5><?php echo $Subcategoria; ?></h5>
                        </div>


                        <div class="form-group">
                            <a href="articulos.php" class="btn btn-secondary" name="regresar">
                                Regresar
                            </a>
                        </div>




                    </form>





                </div>


                <div class="text-center">
                    <h1><b><i>Comentarios</i></b></h1>
                    <hr class="my-4">


                    <form method="POST">



                    <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>            
                
            <div id="cartas" class="card">
            <div class="card-body">


            
                     
                    <h7 class="card-title"><?php echo $row['fecha']; ?></h7>
                    <p class="card-text"><?php echo $row['descripcion']; ?></p>

                    </div>
            </div>

            <?php
            echo "<br>";
            }
            ?>
            


                        <div class="form-group">
                            <input type="text" style="  margin: 1em; width: 300px;  " name="descripcion" class="form-control" placeholder="Agregar comentario" autofocus>

                        </div>

                        <div class="form-group">
                            <button href="articulos.php" type="submit" name="Comentar" class="btn btn-success btn-block; ">Comentar</button>
                        </div>




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