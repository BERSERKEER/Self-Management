<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'databaseAPI.php';

$data = json_decode(file_get_contents("php://input"), true);

$correo = $data['correo'] ?? '';
$password = $data['password'] ?? '';

if ($correo && $password) {
    $query = "SELECT * FROM user WHERE correo = ? AND password = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ss", $correo, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $user = $resultado->fetch_assoc();
        echo json_encode([
            "message" => "Login correcto",
            "user" => [
                "id" => $user['id'],
                "nombre" => $user['nombre'],
                "rol" => $user['rol']
            ]
        ]);
    } else {
        http_response_code(401);
        echo json_encode(["error" => "Credenciales incorrectas"]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Faltan datos"]);
}
