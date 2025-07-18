<?php
require_once 'config/database.php';
require_once 'app/controllers/LoginController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new LoginController($conexion);
    $redirect = $controller->login($_POST['correo'], $_POST['password']);

    if ($redirect) {
        header("Location: " . $redirect);
        exit();
    } else {
        $_SESSION['error'] = "Usuario o contraseña incorrectos";
        header("Location: /Self-Management/app/views/auth/login.php");
        exit();
    }
}

header("Location: /Self-Management/app/views/auth/login.php");
