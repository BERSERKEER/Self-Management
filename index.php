<?php
$db = new mysqli('localhost', 'root', '', 'db_ssm');

$controllerName = ucfirst($_GET['controller'] ?? 'home') . 'Controller';
require_once 'app/controllers/' . $controllerName . '.php';

$controller = new $controllerName($db);
$action = $_GET['action'] ?? 'index';
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Error: método '$action' no encontrado en $controllerName";
}
