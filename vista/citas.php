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
    <?php
    //obtenemos el usuario
    $usuario = $entityManager->getRepository("usuario")
      ->findBy(array('idUsuario' => $_SESSION['idUsuario']));
    //obtenemos solo el id del usuario
    $idUsuario = $usuario[0]->getIdUsuario();
    //obtenemos las citas con el id del usuario actual y ordenamos en orden ascendente
    $citas = $entityManager->getRepository("citas")
      ->findBy(array('usuario' => $idUsuario), ['fecha_cita' => 'ASC']);
    if (!empty($citas)) {
     
    ?>
    <div class="bd-example m-0 border-0">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">idCita</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>

        <tbody>
          <?php
          // contador para llevar una cuenta de citas en la tabla
          $contador = 1;
          foreach ($citas as $cita) {

          ?>
            <tr>
              <th scope="row"><?php echo $contador ?></th>
              <td><?php echo $cita->getIdCitas(); ?></td>
              <td><?php echo $cita->getFecha_cita()->format('d-m-y'); ?></td>
              <?php
              // estructura switch que cambia el color del estado dependiendo del estado en el 
              // que se encuentre
              switch ($cita->getEstado()) {
                case 'pendiente':
                  echo "<td style='color: orange;'>" . $cita->getEstado() . "</td>";
                  break;
                case 'aceptada':
                  echo "<td style='color: green;'>" . $cita->getEstado() . "</td>";
                  break;
                case 'rechazada':
                  echo "<td style='color: red;'>" . $cita->getEstado() . "</td>";
                  break;
              }
              ?>
            </tr>
          <?php
            $contador += 1;
          }
          ?>
        </tbody>
      </table>
    </div>
    <?php
     }
     else {
      echo "<div class='d-flex justify-content-center align-items-center' style='height: 100vh;'><h1>No hay citas</h1></div>";
     }
    ?>
  </div>
  <script src="/Peluqueria/vista/js/header.js"></script>
  <script src="/Peluqueria/vista/js/login.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>