<?php
include ("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Usuario.php");

global $entityManager;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function buscarEmail($entityManager) {
    $result = $entityManager->getRepository("Usuario")->findOneBy(array('email' => $_POST['email']));

    $res = true;
    if (!$result) { 
        $res = false;
    }
    echo $res;
    return $res;
}
    echo buscarEmail($entityManager);
}
?>