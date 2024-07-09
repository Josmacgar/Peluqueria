<?php
include("header.php");
include("../modelo/Doctrine/bootstrap.php");
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
<div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">
    
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
          </thead>

          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          </tbody>
        </table>
        
  </div>
</div>

    <?php
           //obtenemos el usuario
           $usuario = $entityManager->getRepository("usuario")
           ->findBy(array('idUsuario' => $_SESSION['idUsuario']));
           //obtenemos solo el id del usuario
           $idUsuario = $usuario[0]->getIdUsuario();
           //obtenemos las citas con el id del usuario actual
           $citas = $entityManager->getRepository("citas")
           ->findBy(array('usuario' => $idUsuario));
           print_r($citas);
    ?>
    <script src="/Peluqueria/vista/js/header.js"></script>
    <script src="/Peluqueria/vista/js/login.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>