<?php

use Doctrine\Common\Collections\ArrayCollection;

include("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    global $entityManager;

    function asd($entityManager) {
        $email = $_POST['email'];
        $result = $entityManager->getRepository("Usuario")->findOneBy(array('email' => $email));

        $res = true;
        if (!$result) { 
            $res = false;
        }
        echo $res;
        return $res;
    }

    echo asd($entityManager);

}
