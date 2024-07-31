<?php
include("../modelo/conexion_BD.php");
include("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Citas.php");

global $entityManager;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function comprobarCitas($entityManager)
    {
        $fecha = new DateTime($_POST['fecha']);
        $result = $entityManager->getRepository("Citas")->findAll();
        // foreach que recorre todas las citas
        $comprobar = 0;
        foreach ($result as $valor) {
            $comprobar = 0;
            //   comprobamos si la fecha que insertamos esta entre dos fechas
            $fecha_inicio = $valor->getFecha_cita();
            $fecha_fin =$valor->getFecha_fin(); 
            //si la fecha esta entre el rango no se realiza la cita
            if ($fecha >= $fecha_inicio && $fecha <= $fecha_fin) {
                $comprobar = 1;
                break;
            }
        }

        $res = true;
        if ($comprobar == 0) {
            $res = false;
        }
        echo $res;
        return $res;
    }
    echo comprobarCitas($entityManager);
}
