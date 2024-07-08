<?php
include("../modelo/modeloUsuarios.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contraseña = $_POST['password'];
    $email=$_POST['email'];
    //ciframos la contraseña
    $cifrarPassword = hash("sha256", $contraseña);
    $credenciales = obtenerCredenciales($email); //devuelve array con los datos

    //si la contraseña es correcta y el usuario no esta baneado crea la sesion y carga home
    if ($credenciales[3] == $cifrarPassword && $credenciales[5] == 0) {
        session_start();
        $_SESSION['idUsuario'] = $credenciales[0];
        $_SESSION['nombre'] = $credenciales[1];
        $_SESSION['email'] = $credenciales[2];
        $_SESSION['contraseña'] = $credenciales[3];
        $_SESSION['telefono'] = $credenciales[4];
        $_SESSION['baneado'] = $credenciales[5];
        $_SESSION['rol'] = $credenciales[6];
        header("Location:../index.php");
    } else {
            

    }
}
