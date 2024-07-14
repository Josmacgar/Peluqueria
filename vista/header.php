<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/Peluqueria/vista/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
        <!-- Header -->
        <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/Peluqueria/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Rubi Barber</span>
            </a>

            <ul class="nav nav-pills" id="navbar">
                <li class="nav-item"><a href="/Peluqueria/index.php" class="nav-link active" aria-current="page">Home</a></li>
                <?php
                    if (!isset($_SESSION['email'])) {
                     echo "<li class=\"nav-item\"><a href=\"/Peluqueria/vista/registroUsuario.php\" class=\"nav-link\">Registrarse</a></li>";
                     echo "<li class=\"nav-item\"><a href=\"/Peluqueria/vista/login.php\" class=\"nav-link\">Login</a></li>";
                    }
                ?>
               
                <?php
                //se muestran acciones cuando existe una sesion si existe una sesion
                    if (isset($_SESSION['email'])) {
                      echo "<li class=\"nav-item\"><a href=\"/Peluqueria/vista/citas.php\" class=\"nav-link\">Citas</a></li>";
                      if ($_SESSION['rol']=='admin') {
                        echo "<li class=\"nav-item\"><a href=\"/Peluqueria/vista/calendario.php\" class=\"nav-link\">Mis citas</a></li>";
                      }
                      echo "<li class=\"nav-item\"><a href=\"/Peluqueria/controlador/cerrarSesion.php\" class=\"nav-link\">Logout</a></li>";
                      echo "<li class=\"nav-item d-flex align-items-center\"><img src=\"/Peluqueria/vista/img/usuario.png\"> <span>{$_SESSION['nombre']}</span></li>";
                    }
                ?>
                
            </ul>
        </header>
    </div>
</body>
</html>