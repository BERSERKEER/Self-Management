<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_ssm";

$conexion = mysqli_connect(
    $server,
    $user,
    $pass,
    $db
);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "conectado";
}
