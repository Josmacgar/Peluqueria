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
            //Estructura switch que cambia el fondo y el color de la celda dependiendo del estado de la cita
            $colorFondo='';
            $colorTexto='white';
            switch ($cita->getEstado()) {
                case 'aceptado':
                    // $colorFondo='blue';
                    break;
                case 'pendiente':
                    $colorFondo='orange';
                    $colorTexto='black';
                    break;
                case 'denegado':
                    $colorFondo='red';
                    break;
            }
            $citasArray[] = [
                'title' => $cita->getTitulo(), 
                'start' => $cita->getFecha_cita()->format('Y-m-d H:i:s'), 
                'end' => $cita->getFecha_cita()->format('Y-m-d H:i:s'),
                'backgroundColor'=>$colorFondo,
                'textColor'=>$colorTexto
            ];
        }

        // Devolvemos los datos en formato JSON
        header('Content-Type: application/json');
        echo json_encode($citasArray);
    }

    allCitas($entityManager);
}
?>
