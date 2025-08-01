<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_ssm";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Conexión fallida"]);
    exit;
}
