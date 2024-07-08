<?php
include ("conexion_BD.php");

//funcion que devuelve los datos del email pasado como parametro
function obtenerCredenciales($email){
    $sqlCredenciales = "SELECT * FROM usuario WHERE email='$email'";
    $result = $GLOBALS["bd"]->query($sqlCredenciales);

    if ($result->rowCount() == 0) {

    } else {
        $res = $result->fetch(PDO::FETCH_ASSOC);
        $idUsuario = $res["idUsuario"];        
        $nombre = $res["nombre"];
        $email = $res["email"];
        $contraseña=$res["contraseña"];
        $telefono=$res['telefono'];
        $baneado=$res['baneado'];
        $rol = $res["rol"];
        return array($idUsuario,$nombre, $email,$contraseña,$telefono,$baneado,$rol);
    }
}
