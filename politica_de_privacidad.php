<?php
ob_start();
?>
<?php     
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "prograweb";    
    $db = new mysqli($servidor,$usuarioBD,$pwdBD,$nomBD);    
    $query = mysqli_query($db, "SELECT Titulo, autor, imagen, contenido FROM articulo");    
    
?>

<!doctype html>
<html lang="es">

<head>
    <title>Política de privacidad</title>
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
    <?php include("./templates/header.php")?>

    <div class="text-center">
            <h1 aling="center"><b><i>Política de privacidad</i></b></h1>            
            <hr class="my-4">
    </div>


<div class="container-fluid" id="contenedor1">
<h1>Sus datos</h1>
      <p>
        Rome Blog requiere de datos personales (nombre, apellidos, edad, dirección, 
        RFC, teléfono) por parte del usuario que desee registrarse, esto con el fin de
        identificar a dicho usuario y mantener un control sobre los comentarios que se
        puedan agregar a artículos existentes y al publicar nuevos artículos. 
      </p>
      <br />
      <p>
        Para reconocer la autoría de los artículos publicados se hace uso de los datos
        personales con los que se registra usted, de manera que estos deben ser legítimos
        para reconocer el crédito del propietario intelectual de la información piblicada
        en los artículos.
      </p>
      <br />
      <p>
        Al agregar comentarios en los artículos presentes, Rome Blog tiene la autoridad de
        apropiarse de los datos de usuario en caso de que los comentarios no sigan los acuerdos
        establecidos en los términos y condiciones, sean despectivos, producto de un plagio
        intelectual y/o cualquier otra situación en que estos puedan alterar la armonía divulgativa
        del propio blog incluyendo a las entidades que lo componen (usuarios, autores, lectores).
      </p>
      <br />
      <h1>Integridad</h1>
      <p>
        A pesar de que Rome Blog se esfuerza por mantener una sólida seguridad e integridad de
        sus datos, no se hace responsable de estos ante cualquier anomalía que pudiera surgir.
        Usted no puede ejercer acciones de ningún tipo en contra de Rome Blog por lo mencionado
        anteriormente. Si usted no está de acuerdo con esto, decline al registro que está generando.
      </p>
      <br />
      <p>
          La integridad y seguridad de sus datos también depende de la veracidad de estos y de que
          usted como usuario de Rome Blog no altere estos de manera malintencionada o inconsciente.
          Si usted introduce información personal más sencible en una publicación de artículo o en
          algún comentario, Rome Blog no se hace responsable de estos datos y ni de las actividades
          que terceros pudieran ejercer a partir de ellos para un buen o mal fin.
      </p>
      <br />
  
<h1 style="margin-top: 10px;">Política de privacidad</h1>
</div>


</div>
</div>

    <!--FOOTER-->
    <?php include("./templates/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>



