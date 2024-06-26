<?php
use Doctrine\Common\Collections\ArrayCollection;
include ("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Usuario.php");

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    print_r($_POST);
    $usuario = new Usuario();
    $usuario->setNombre($_POST['nombre']);
    $usuario->setEmail($_POST['email']);
    $usuario->setContraseña($_POST['password']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setBaneado(0);
    $usuario->setRol("cliente");
    $entityManager->persist($usuario);
    $entityManager->flush();
    header("Location:../index.php");
}
//$usuarios = $entityManager->getRepository("usuario")
//->findAll();
//foreach ($usuarios as $key) {
//echo $key;
//}
?>
