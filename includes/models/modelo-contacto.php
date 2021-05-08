<?php

if($_POST['accion'] === 'crear'){
    //crear un nuevo registro
    require_once('../functions/database.php');

    //validar las entradas para evitar SQL injections
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    $telefono2 = filter_var($_POST['telefono2'], FILTER_SANITIZE_STRING);

    try {
        $statement = $conn->prepare("INSERT INTO contacto (nombre, email, telefono, telefono2) VALUES (?,?,?,?)");
        $statement->bind_param("ssss", $nombre,$email,$telefono,$telefono2);
        $statement->execute();

        $respuesta = array(
            'respuesta' => 'correcto',
            'info' => $statement
        );

        $statement->close();
        $conn->close();

    } catch (Exception $e) {
        $respuesta = array(
            'error' => $e.getMessage()
        );
    }

    echo json_encode($respuesta);
}