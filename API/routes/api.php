<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../controllers/AuthController.php';

$controller = new AuthController($conexion);

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

if ($method === 'POST' && strpos($path, '/api/login') !== false) {
    $data = json_decode(file_get_contents('php://input'), true);
    $controller->login($data);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Ruta no encontrada']);
}
