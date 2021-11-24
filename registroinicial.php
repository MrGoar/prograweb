<!DOCTYPE html>
<html lang="es">

<head>
    <title>Rome Blog</title>
    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
    
    
    <style>
    .formu{
        max-width:50%;
        margin: 0 auto;
    }

    .contenedor {
                  
        display: flex;
        justify-content: center;
    }

    </style>
     
    
</head>

<body >
    <!--HEADER-->
    <?php include("./templates/header.php")?>
    <br>
    <br>

    <!--Cuerpo-->

    <div >
        
    </div>
    <div class="formu border border-warning rounded-lg" >
        <div class="formu">
            <h1>Crear cuenta</h1>
            <h6 class="text-muted">Ya tengo una cuenta? <u><a href="#" class="text-muted">Iniciar sesion</a> </u></h6>
            
        </div>

        <!--Formulario-->
        <div id="formulario">

              <form action="registrocheck.php" class="contenedor" >

              <div id="formdatos" class="form-group"> 

                  <label for="correo">Correo:</label><br>
                  <input type="text" id="correo" name="correo" required><br>
                  <label for="name">Nombre:</label><br>
                  <input type="text" id="name" name="name" required><br>
                  <label for="pass">Contraseña:</label><br>
                  <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[A-Z]).{4,}" required><br>

              </div>    
              
              <div id="formrol" class="form-check" >

                  <label >Elige un rol:</label><br>                  
                  <input type="radio" id="escritor" name="rol" value="Escritor">
                  <label for="escritor">Escritor</label><br>
                  <input type="radio" id="lector" name="rol" value="Lector" checked>                  
                  <label for="vehicle2">Lector </label><br>
                  <input type="submit" value="Submit" class="btn btn-warning my-2 my-sm-0">

              </div>
              
              
              
            </form>
            
        </div>
    </div>

   

    <!--Footer-->
    <br>
    <br>
    <?php include("./templates/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>