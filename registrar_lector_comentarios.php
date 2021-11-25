<!doctype html>
<html lang="es">

<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="img/ico-user-lector.ico" />
  <link rel="stylesheet" href="/css/templates.css">
  <link rel="stylesheet" href="/css/home.css">
</head>

<body>
  <!--HEADER-->
  <?php include("./templates/header.php") ?>
  <!--CONTENT-->
  <section class="box" style="padding: 0;
  margin: 0;
  box-sizing: border-box;
  width: 60%;
  background: rgba(0, 0, 0, 0.4);
  padding: 20px;
  margin: 0 auto;
  margin-top: 4%;
  margin-bottom: 4%;
  color: white;
  border-radius: 15px;">

    <div class="container-fluid" id="contenedor1" style="padding-bottom:2%; padding-top:0%">
      <div class="text-center">
        <h1 aling="center" style="padding-top:2%;"><b>Registro de usuario</b></h1>
      </div>

      <div class="text-center">
        <img style="margin-left:auto; margin-right:auto; margin-bottom:3%; margin-top:2%;" src="img/user-lector.png" alt="Imagen de usuario" width=150 height=150>
      </div>

      <div class="container" id="contenedor">
        <h4 style="text-align:center;">Por favor, introduzca los siguientes datos para crear su perfil.</h4><br>
        <div class="panel" id="panel3">
        </div>

        <form method="post" action="registrar-lectores-bd/registrar-lector.php" class="was-validated" name="formulario">

          <div class="form-group" style="width:49%; float:left; margin-right:1%;">
            <label for="uname">Nombre</label>
            <input type="text" class="form-control" id="uname" placeholder="Nombre" name="nombre" required>
          </div>

          <div class="form-group" style="width:49%; float:right; margin-left:1%;">
            <label for="uname">Apellido paterno</label>
            <input type="text" class="form-control" id="ap_paterno" placeholder="Apellido paterno" name="ap_paterno" required>
          </div>

          <div class="form-group" style="width:49%; float:left; margin-right:1%;">
            <label for="uname">Apellido materno</label>
            <input type="text" class="form-control" id="ap_materno" placeholder="Apellido materno" name="ap_materno" required>
          </div>

          <div class="form-group" style="width:49%; float:right; margin-left:1%;">
            <label for="uname">Edad</label>
            <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad" required>
          </div>

          <div class="form-group">
            <label for="uname">Temas de interés</label>
            <select class="form-control" id="temas_interes" name="temas_interes" required>
              <option value="TemaUno">TemaUno</option>
              <option value="TemaDos">TemaDos</option>
              <option value="TemaTres">TemaTres</option>
              <option value="TemaCuatro">TemaCuatro</option>
            </select>
          </div>

          <div class="form-group">
            <label for="uname">Correo</label>
            <input type="text" class="form-control" id="correo" placeholder="Correo" value="antonio@toluca.tecnm.mx" name="correo" readonly required>
          </div>

          <div class="form-group" style="margin-top:4%;">
            <div class="form-check">
              <input id="ck-terminos" class="form-check-input" type="checkbox" style="width:15px; height:15px;" onclick="javascript:validar(this);" value="1" />
              <label for="uname">Al seleccionar esta casilla estas aceptando los
                <a href="terminos-uso/term-uso.html" target="_blank">términos de uso</a>
                y las
                <a href="politicas-privacidad/politicas-priv.html" target="_blank">política de privacidad </a>de Rome Blog.
              </label>
            </div>

            <button type="submit" class="btn btn-success btn-block" name="guardar" id="btnform" style="margin-top:2%; margin-bottom:0%;" disabled>Registrarme</button>

        </form>
      </div>
    </div>
  </section>
  <script>
    function validar(obj) {
      var d = document.formulario;
      if (obj.checked == true) {
        d.guardar.disabled = false;
      } else {
        d.guardar.disabled = true;
      }
    }
  </script>
  <!--FOOTER-->
  <?php include("./templates/footer.php") ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>