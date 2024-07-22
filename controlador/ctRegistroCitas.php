<?php
use Doctrine\Common\Collections\ArrayCollection;
include ("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Citas.php");
session_start();
$findUsuario=false;
if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $citas = new Citas();
        $citas->setTitulo($_POST['titulo']);
        $citas->setEstado('pendiente');
        $usuario = $entityManager->getRepository("Usuario")->findOneBy(array('idUsuario' => $_SESSION['idUsuario']));
        $citas->setUsuario($usuario);
        $fecha= new DateTime($_POST['fecha']);
        $citas->setFecha_cita($fecha);
        //clonamos $fecha para que no actualice la variable $fecha y le sumamos 30 minutos
        $fechaFin = (clone $fecha)->add(new DateInterval('PT30M'));
        $citas->setFecha_fin($fechaFin);
        $entityManager->persist($citas);
        $entityManager->flush();
        $findUsuario=false;
        header("Location:../vista/citas.php");
}
//$usuarios = $entityManager->getRepository("usuario")
//->findAll();
//foreach ($usuarios as $key) {
//echo $key;
//}
?>
