<?php
session_start();

// Función para verificar si el usuario está autenticado y tiene el rol correcto
function isAuthenticated($requiredRole = null) {
    if (!isset($_SESSION['username'])) {
        return false;
    }

    if ($requiredRole && $_SESSION['role'] !== $requiredRole) {
        return false;
    }

    return true;
}

// Función para manejar errores
function handleError($message) {
    die("❌ Error: {$message}");
}

// Función para cargar el controlador y ejecutar la acción
function dispatch($controller, $action) {
    $controllerFile = __DIR__ . "/app/controllers/" . ucfirst($controller) . "Controller.php";

    if (!file_exists($controllerFile)) {
        handleError("Controlador '{$controller}' no encontrado.");
    }

    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . "Controller";

    if (!class_exists($controllerClass)) {
        handleError("Clase del controlador '{$controllerClass}' no encontrada.");
    }

    $controllerObj = new $controllerClass();

    if (!method_exists($controllerObj, $action)) {
        handleError("Acción '{$action}' no encontrada en el controlador '{$controllerClass}'.");
    }

    $controllerObj->$action();
}

// Obtener el controlador y la acción de los parámetros GET
$controller = strtolower($_GET['controller'] ?? 'home');
$action = $_GET['action'] ?? 'index';

// Acciones que requieren autenticación
$authRequiredActions = [
    'admin' => ['adminPage'],
    'moderator' => ['moderatorPage'],
    'user' => ['userPage']
];

// Verificar si la acción requiere autenticación
if (isset($authRequiredActions[$controller]) && in_array($action, $authRequiredActions[$controller])) {
    if (!isAuthenticated($controller)) {
        handleError("No tienes permisos para acceder a esta acción.");
    }
}

// Despachar la solicitud
dispatch($controller, $action);

exit();
