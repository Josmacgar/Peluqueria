<?php
include ("../modelo/conexion_BD.php");
include("../modelo/Doctrine/bootstrap.php");
include("../modelo/Doctrine/Entity/Citas.php");

global $entityManager;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function allCitas($entityManager) {
        $result = $entityManager->getRepository("Citas")->findAll();

        // Convertimos el resultado a un array
        $citasArray = [];
        foreach ($result as $cita) {
            $citasArray[] = [
                'title' => $cita->getTitulo(), 
                'start' => $cita->getFecha_cita()->format('Y-m-d H:i:s'), 
                'end' => $cita->getFecha_cita()->format('Y-m-d H:i:s'),
            ];
        }

        // Devolvemos los datos en formato JSON
        header('Content-Type: application/json');
        echo json_encode($citasArray);
    }

    allCitas($entityManager);
}
?>
