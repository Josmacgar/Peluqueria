<?php
use Doctrine\Common\Collections\ArrayCollection;
include ("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Usuario.php");

$findUsuario=false;
if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setEmail($_POST['email']);
        $contraseña= hash('sha256',$_POST['password']);
        $usuario->setContraseña($contraseña);
        $usuario->setTelefono($_POST['telefono']);
        $usuario->setBaneado(0);
        $usuario->setRol("cliente");
        $entityManager->persist($usuario);
        $entityManager->flush();
        $findUsuario=false;
        header("Location:../index.php");
}
//$usuarios = $entityManager->getRepository("usuario")
//->findAll();
//foreach ($usuarios as $key) {
//echo $key;
//}
?>
