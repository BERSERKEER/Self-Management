<?php
require_once 'config/database.php';
require_once 'app/controllers/registerController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new RegisterController($conexion);

    $result = $controller->register(
        $_POST['nombre'],
        $_POST['correo'],
        $_POST['telefono'],
        $_POST['password']
    );

    if ($result['success']) {
        $_SESSION['success'] = $result['message'];
        header("Location: /Self-Management/app/views/auth/login.php");
    } else {
        $_SESSION['error'] = $result['message'];
        header("Location: /Self-Management/app/views/auth/register_log.php");
    }
    exit();
}

header("Location: /Self-Management/app/views/auth/register_log.php");
