

<!doctype html>
<html lang="es">

<head>
    <title>Rome Blog</title>
    <link rel="icon" type="image/png" href="img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
    <link rel="stylesheet" href="css/templates.css">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="display:flexbox;">                            
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Brand -->
                <a class="navbar-brand" href="/home.php"><img src="img/rome.png" alt="logo" width="125px" height="60px"></a>
                <h1>Rome Blog</h1>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul> 
                
                <div class="dropdown show">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/user.png" alt="logo" width="50px" height="50px"></a>
                    <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Iniciar Sesion</a>
                        <a class="dropdown-item" href="#">Registrarse</a>                        
                    </div>
                
                
                
                
        </nav>

        <hr style="background-color:white; margin-bottom: 2px; margin-top: 2px;">

        <nav class="navbar navbar-expand-lg navbar-dark" style="padding-top:0px;">
            <!-- Navbar links -->
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" id="btnInicio" href="/home.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a id="btnArticulos" class="nav-link" href="/articulos.php">Artículos</a>
                    </li>          
                    <li class="nav-item dropdown active">                    
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/destino.php">Monumentos Destino</a>
                            <a class="dropdown-item" href="/paso.php">Monumentos de Paso</a>                        
                        </div>                    
                    </li>          
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
                </form>  
            </div>
        </nav>
    </header>