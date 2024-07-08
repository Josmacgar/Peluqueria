<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroUsuario</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="vista/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Peluqueria/vista/css/headers.css">
    <link rel="stylesheet" href="/Peluqueria/vista/css/registroUsuario.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Iniciar Sesion</h1>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form class="" id="formulario" action="/Peluqueria/controlador/ctLogin.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" name="email" id="email" placeholder="name@example.com">
                            <label for="email">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" name="password" id="password" placeholder="Password">
                            <label for="password">Contraseña</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
                        <small class="text-body-secondary">Al hacer click, aceptas los términos de uso</small>

                    </form>
                    <p id="error" ></p>
                </div>
            </div>
        </div>
    </div>
    <script src="/Peluqueria/vista/js/header.js"></script>
    <script src="/Peluqueria/vista/js/login.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>