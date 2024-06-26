<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="vista/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vista/css/headers.css">
    <link rel="stylesheet" href="vista/css/styles.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <?php
    include("vista/header.php");
    ?>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenido</div>
            <div class="masthead-heading text-uppercase">Calidad/Precio garantizado</div>
            <?php
            //se muestra login cuando no existe una sesion
            if (!isset($_SESSION['email'])) {
                echo "<a class=\"btn btn-primary btn-xl text-uppercase\" href=\"/\">Iniciar sesión</a>";
            }
            ?>

        </div>
    </header>
    <!-- Servicios -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fas fa-clipboard-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Disponibilidad</h4>
                    <p class="text-muted">Servidores rápidos y accesibles</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Diseño Responsive</h4>
                    <p class="text-muted">Diseño adaptativo a todo tipo de pantallas</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Seguridad</h4>
                    <p class="text-muted">Todos los datos sensibles serán encriptados</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Maps -->
    <section class="m-auto d-flex justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d796.0775429630902!2d-5.177574971440339!3d37.05009106860171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0d51af288a3d63%3A0x7b743e6f7f465566!2sC.%20Iglesia%20Alta%2C%2034%2C%2041660%20Villanueva%20de%20San%20Juan%2C%20Sevilla!5e0!3m2!1ses!2ses!4v1719228433006!5m2!1ses!2ses" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <script src="/peluqueria/vista/js/header.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>