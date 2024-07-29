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
                    <h1 class="fw-bold mb-0 fs-2">Registro de Citas</h1>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form action="../controlador/ctRegistroCitas.php" method="post" id="formulario">
                    <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="titulo" name="titulo" placeholder="name@example.com">
                            <label for="titulo">Titulo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="datetime-local" class="form-control rounded-3" id="fecha" name="fecha" placeholder="name@example.com">
                            <label for="fecha">Fecha</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Registro</button>
                        <small class="text-body-secondary">Al hacer click, aceptas los términos de uso</small>

                    </form>
                    <p id="error" ></p>
                </div>
            </div>
        </div>
    </div>
    <script src="/Peluqueria/vista/js/header.js"></script>
    <script src="/Peluqueria/vista/js/registroCitas.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>